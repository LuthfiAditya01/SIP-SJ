<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBalita;
use App\Models\DataPerkembanganBalita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BalitaController extends Controller
{
    public $userModel;
    public $lingkungan;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        // Inisialisasi array dengan struktur yang benar
        $lingkungan = auth()->user()->lingkungan;
        $formattedData = [
            'lingkungan' => ['1', '2', '3', '4', '5'], // Set lingkungan berurutan
            'sehat' => array_fill(0, 5, 0), // Inisialisasi array dengan 0 untuk 5 lingkungan
            'kurang_sehat' => array_fill(0, 5, 0),
            'stunting' => array_fill(0, 5, 0),
            'perlu_diverifikasi' => array_fill(0, 5, 0)
        ];

        // Ambil data dan urutkan berdasarkan lingkungan
        $data = DB::table('data_balita')
            ->select('lingkungan', 'is_stunting', DB::raw('COUNT(*) as jumlah'))
            ->groupBy('lingkungan', 'is_stunting')
            ->orderBy('lingkungan')
            ->get();

        // Isi data sesuai lingkungan
        foreach ($data as $row) {
            $index = (int)$row->lingkungan - 1; // Konversi ke index array (0-4)
            
            switch($row->is_stunting) {
                case 'Sehat':
                    $formattedData['sehat'][$index] = $row->jumlah;
                    break;
                case 'Perlu Perhatian':
                    $formattedData['kurang_sehat'][$index] = $row->jumlah;
                    break;
                case 'Stunting':
                    $formattedData['stunting'][$index] = $row->jumlah;
                    break;
                case 'Perlu Diverifikasi':
                    $formattedData['perlu_diverifikasi'][$index] = $row->jumlah;
                    break;
            }
        }

        // Hitung total untuk masing-masing kategori
        $balitaSehat = DataBalita::where('is_stunting', '=', 'Sehat')->count();
        $balitaStunting = DataBalita::where('is_stunting', '=', 'Stunting')->count(); 
        $balitaPerluPerhatian = DataBalita::where('is_stunting', '=', 'Perlu Perhatian')->count();
        $balitaPerluDiverifikasi = DataBalita::where('is_stunting', '=', 'Perlu Diverifikasi')->count();
        
                // // Log successful data processing
                // Log::info('Data processed successfully', [
                //     'lingkungan' => $row->lingkungan,
                //     'status' => $row->is_stunting,
                //     'jumlah' => $row->jumlah,
                //     'index' => $lingkunganIndex
                // ]);
        
            // } catch (\Exception $e) {
            //     Log::error('Error processing data row', [
            //         'error' => $e->getMessage(),
            //         'row' => $row
            //     ]);
            //     continue;
            // }
        

        return view('home', compact('balitaSehat', 'balitaStunting', 'balitaPerluPerhatian', 'balitaPerluDiverifikasi', 'formattedData', 'lingkungan'));
    }

    public function index($lingkungan)
    {
        // Ambil lingkungan dan role dari user yang sedang login
        $lingkunganUser = auth()->user()->lingkungan;
        $roleUser = auth()->user()->role;

        // Cek apakah user adalah bidan atau kader
        $isBidan = $roleUser === 'bidan';
        $isKader = $roleUser === 'kader';

        // Jika user adalah kader, pastikan lingkungannya sesuai
        if ($isKader && $lingkungan != $lingkunganUser) {
            return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke lingkungan ini.');
        }

        // Ambil data balita berdasarkan lingkungan
        $balita = DataBalita::where('lingkungan', $lingkungan)->get();

        // Jika data balita kosong, set pesan error
        if ($balita->isEmpty()) {
            $error = 'Data balita tidak ditemukan atau kosong';
            return view('balita_index', compact('balita', 'lingkungan', 'error'));
        }

        // Jika user adalah bidan atau kader di lingkungannya, tampilkan halaman balita_index
        if ($isBidan || ($isKader && $lingkungan == $lingkunganUser)) {
            return view('balita_index', compact('balita', 'lingkungan'));
        }

        // Jika tidak memenuhi syarat, redirect ke home
        return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }

    public function detail($id_balita){
        $balita = DataBalita::where('id', $id_balita)->first();
        $perkembangan = DataPerkembanganBalita::where('id_balita', $id_balita)->orderBy('tanggal_penimbangan', 'desc')->take(5)->get();
        $perkembanganTotal = DataPerkembanganBalita::where('id_balita', $id_balita)->orderBy('tanggal_penimbangan', 'desc')->get();
        $timbanganPertama = DataPerkembanganBalita::where('id_balita', $id_balita)->oldest()->first();
        $lingkungan = auth()->user()->lingkungan;

        return view('balita_detail', compact('balita', 'perkembangan', 'perkembanganTotal', 'timbanganPertama', 'id_balita', 'lingkungan'));
    }

    public function add($id_balita){
        $balita = DataBalita::find($id_balita);
        $balitaPerkembangan = DataPerkembanganBalita::where('id_balita', $id_balita)->get();
        $lingkungan = auth()->user()->lingkungan;
        return view('balita_add', compact('balita', 'balitaPerkembangan', 'id_balita', 'lingkungan'));
    }

    public function store(Request $request)
    {
        // Mengambil data balita yang ada berdasarkan ID yang diberikan
        $balita = DataBalita::findOrFail($request->input('id_balita'));

        // Update status is_stunting menjadi 'Perlu Diverifikasi'
        $balita->is_stunting = 'Perlu Diverifikasi';
        $balita->save();

        // Validasi data perkembangan balita
        $validatedDataPerkembangan = $request->validate([
            'id_balita' => 'required|numeric',
            'tanggal_penimbangan' => 'required|date',
            'berat_balita' => 'required|numeric|min:0',
            'tinggi_balita' => 'required|numeric|min:0',
            'lingkar_kepala' => 'required|numeric|min:0', // Pastikan name attribute di form sesuai
            'lingkar_lengan' => 'required|numeric|min:0', // Pastikan name attribute di form sesuai
            'vaksin' => 'required|in:Vitamin A,Obat Cacing,Tidak Diberikan',
            'imunisasi' => 'required|string|max:255' // Pastikan name attribute di form sesuai
        ], [
            // id_balita
            'id_balita.required' => 'ID balita wajib ada',
            'id_balita.numeric' => 'Format ID balita tidak valid',
            
            // tanggal_penimbangan
            'tanggal_penimbangan.required' => 'Tanggal penimbangan harus diisi',
            'tanggal_penimbangan.date' => 'Format tanggal tidak valid',

            // Berat Balita
            'berat_balita.required' => 'Berat badan harus diisi',
            'berat_balita.numeric' => 'Berat badan harus berupa angka',
            'berat_balita.min' => 'Berat badan tidak boleh negatif',
            
            // tinggi_balita
            'tinggi_balita.required' => 'Tinggi badan harus diisi',
            'tinggi_balita.numeric' => 'Tinggi badan harus berupa angka',
            'tinggi_balita.min' => 'Tinggi badan tidak boleh negatif',
            
            // lingkar_kepala
            'lingkar_kepala.required' => 'Lingkar kepala harus diisi',
            'lingkar_kepala.numeric' => 'Lingkar kepala harus berupa angka',
            'lingkar_kepala.min' => 'Lingkar kepala tidak boleh negatif',
            
            // lingkar_lengan
            'lingkar_lengan.required' => 'Lingkar lengan harus diisi',
            'lingkar_lengan.numeric' => 'Lingkar lengan harus berupa angka',
            'lingkar_lengan.min' => 'Lingkar lengan tidak boleh negatif',
            
            // vaksin
            'vaksin.required' => 'Pilihan vaksin/obat cacing harus diisi',
            'vaksin.in' => 'Pilihan vaksin tidak valid',
            
            // imunisasi
            'imunisasi.required' => 'Kolom imunisasi harus diisi',
            'imunisasi.string' => 'Imunisasi harus berupa teks',
            'imunisasi.max' => 'Imunisasi maksimal 255 karakter'
        ]);

        // Membuat instance baru dari model DataPerkembanganBalita
        $perkembanganBalita = new DataPerkembanganBalita($validatedDataPerkembangan);
        $perkembanganBalita->save();

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('balita.detail', ['id_balita' => $request->id_balita])->with('success', 'Status is_stunting telah diperbarui dan data perkembangan balita baru telah ditambahkan.');
    }

    public function new(){
        $lingkungan = auth()->user()->lingkungan;
        return view('balita_new', compact('lingkungan'));
    }

    public function newStore(Request $request){
        $validatedData = $request->validate([
            'nama_balita' => 'required|string|max:255',
            'nik_balita' => 'required|string|min:16|max:16',
            'nama_ortu' => 'required|string|max:255',
            'nik_ortu' => 'required|string|min:16|max:16',
            'tanggal_lahir' => 'required|date|before_or_equal:today',
            'have_kia' => 'required|in:Ya,Tidak',
            'alamat' => 'required|string|max:1000',
            'lingkungan' => 'required|in:1,2,3,4,5',
            'jenis_kelamin' => 'required|in:L,P'
        ], [
            // Nama Balita
            'nama_balita.required' => 'Nama balita harus diisi.',
            'nama_balita.string' => 'Nama balita harus berupa teks.',
            'nama_balita.max' => 'Nama balita tidak boleh lebih dari 255 karakter.',
            
            // NIK Balita
            'nik_balita.required' => 'NIK balita harus diisi.',
            'nik_balita.string' => 'NIK balita harus berupa teks.',
            'nik_balita.min' => 'NIK balita harus terdiri dari 16 karakter.',
            'nik_balita.max' => 'NIK balita harus terdiri dari 16 karakter.',
            
            // Nama Orang Tua
            'nama_ortu.required' => 'Nama orang tua harus diisi.',
            'nama_ortu.string' => 'Nama orang tua harus berupa teks.',
            'nama_ortu.max' => 'Nama orang tua tidak boleh lebih dari 255 karakter.',
            
            // NIK Orang Tua
            'nik_ortu.required' => 'NIK orang tua harus diisi.',
            'nik_ortu.string' => 'NIK orang tua harus berupa teks.',
            'nik_ortu.min' => 'NIK orang tua harus terdiri dari 16 karakter.',
            'nik_ortu.max' => 'NIK orang tua harus terdiri dari 16 karakter.',
            
            // Tanggal Lahir
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
            'tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
            'tanggal_lahir.before_or_equal' => 'Tanggal lahir tidak boleh lebih dari hari ini.',
            
            // Have KIA
            'have_kia.required' => 'Kolom kepemilikan KIA harus diisi.',
            'have_kia.in' => 'Pilihan kepemilikan KIA tidak valid.',

            // Alamat
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat tidak boleh lebih dari 1000 karakter.',
            
            // Lingkungan
            'lingkungan.required' => 'Lingkungan harus diisi.',
            'lingkungan.in' => 'Lingkungan yang dipilih tidak valid.',
            
            // Jenis Kelamin
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi.',
            'jenis_kelamin.in' => 'Jenis kelamin yang dipilih tidak valid.'
        ]);

        $balita = new DataBalita($validatedData);
        $balita->save();
        return redirect()->route('balita.detail', ['id_balita' => $balita->id])->with('success', 'Data balita berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        try {
            // Cari data berdasarkan ID
            $perkembangan = DataPerkembanganBalita::findOrFail($id);

            // Hapus data
            $perkembangan->delete();

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            // Redirect dengan pesan error jika gagal
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $balita = DataPerkembanganBalita::findOrFail($id);
        $dataBalita = DataBalita::where('id', $balita->id_balita)->first();
        return view('balita_edit', compact('balita', 'dataBalita'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        try {
            // Validasi input
            $request->validate([
                'tanggal_penimbangan' => 'required|date',
                'berat_balita' => 'required|numeric',
                // Tambahkan validasi untuk field lainnya
            ]);

            // Update data
            $perkembangan = DataPerkembanganBalita::findOrFail($id);
            $perkembangan->update($request->all());

            return redirect()->route('balita.detail', ['id_balita' => $perkembangan->id_balita])
                ->with('success', 'Data berhasil diperbarui!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }
}
