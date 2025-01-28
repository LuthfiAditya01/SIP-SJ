<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBalita;
use App\Models\DataPerkembanganBalita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BalitaController extends Controller
{
    public $userModel;

    public function home(){
        // Inisialisasi array dengan struktur yang benar
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
        

        return view('home', compact('balitaSehat', 'balitaStunting', 'balitaPerluPerhatian', 'balitaPerluDiverifikasi', 'formattedData'));
    }

    public function index($lingkungan = null)
    {
        if (!$lingkungan) {
            return redirect()->route('home');
        }
        
        $balita = DataBalita::where('lingkungan', $lingkungan)->get();
            
        if ($balita->isEmpty()) {
            return redirect()->route('home')->with('error', 'Data balita tidak ditemukan');
        }
        
        return view('balita_index', compact('balita', 'lingkungan'));
    }

    public function detail($id_balita){
        $balita = DataBalita::where('id', $id_balita)->first();
        $perkembangan = DataPerkembanganBalita::where('id_balita', $id_balita)->orderBy('created_at', 'desc')->take(5)->get();
        $perkembanganTotal = DataPerkembanganBalita::where('id_balita', $id_balita)->orderBy('created_at', 'desc')->get();
        $timbanganPertama = DataPerkembanganBalita::where('id_balita', $id_balita)->oldest()->first();
        
        return view('balita_detail', compact('balita', 'perkembangan', 'perkembanganTotal', 'timbanganPertama', 'id_balita'));
    }

    public function add($id_balita){
        $balita = DataBalita::find($id_balita);
        $balitaPerkembangan = DataPerkembanganBalita::where('id_balita', $id_balita)->get();
        return view('balita_add', compact('balita', 'balitaPerkembangan', 'id_balita'));
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
            'berat_balita' => 'required|numeric',
            'tinggi_balita' => 'required|numeric'
        ]);

        // Membuat instance baru dari model DataPerkembanganBalita
        $perkembanganBalita = new DataPerkembanganBalita($validatedDataPerkembangan);
        $perkembanganBalita->save();

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('balita.detail', ['id_balita' => $request->id_balita])->with('success', 'Status is_stunting telah diperbarui dan data perkembangan balita baru telah ditambahkan.');
    }

    // public function store(Request $request)
    // {
    //     // Validasi data yang diterima
    //     $validatedData = $request->validate([
    //         'id' => 'required|max:255',
    //         'id_balita' => 'required|max:255',
    //         'nama_balita' => 'required|string|max:255',
    //         'nama_ortu' => 'required|string|max:255',
    //         'tanggal_lahir' => 'required|date',
    //         'lingkungan' => 'required|numeric',
    //         'jenis_kelamin' => 'required|in:L,P',
    //         'is_stunting' => 'required|in:Stunting,Perlu Perhatian,Sehat,Perlu Diverifikasi'
    //     ]);

    //     $alterStatus = $request->validate([
    //         'id' => 'required|max:255'
    //     ]);

    //     // Membuat instance baru dari model DataBalita
    //     $balita = new DataBalita($validatedData);

    //     // Menyimpan data ke database
    //     $balita->save();

    //     // Redirect ke halaman lain dengan pesan sukses
    //     return redirect()->route('balita.index')->with('success', 'Data balita berhasil ditambahkan.');
    // }
}
