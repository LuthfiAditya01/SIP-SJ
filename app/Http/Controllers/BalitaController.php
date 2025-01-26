<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBalita;
use Illuminate\Support\Facades\DB;

class BalitaController extends Controller
{
    public $userModel;

    public function home(){
        $data = DB::table('data_balita')
        ->select('lingkungan', 'is_stunting', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('lingkungan', 'is_stunting')
        ->get();

        // Mengubah data ke dalam format yang mudah diproses di JavaScript
        $formattedData = [
            'lingkungan' => [],
            'sehat' => [],
            'kurang_sehat' => [],
            'stunting' => [],
            'perlu_diverifikasi' => []
        ];

        foreach ($data as $row) {
            if (!in_array($row->lingkungan, $formattedData['lingkungan'])) {
                $formattedData['lingkungan'][] = $row->lingkungan;
            }
    
            if ($row->is_stunting == 'Sehat') {
                $formattedData['sehat'][] = $row->jumlah;
            } elseif ($row->is_stunting == 'Perlu Perhatian') {
                $formattedData['kurang_sehat'][] = $row->jumlah;
            } elseif ($row->is_stunting == 'Stunting') {
                $formattedData['stunting'][] = $row->jumlah;
            } elseif ($row->is_stunting == 'Perlu Diverifikasi') {
                $formattedData['stunting'][] = $row->jumlah;
            }
        }

        $balitaSehat = DataBalita::where('is_stunting', '=', 'Sehat')->count();
        $balitaStunting = DataBalita::where('is_stunting', '=', 'Stunting')->count();
        $balitaPerluPerhatian = DataBalita::where('is_stunting', '=', 'Perlu Perhatian')->count();
        $balitaPerluDiverifikasi = DataBalita::where('is_stunting', '=', 'Perlu Diverifikasi')->count();
        return view('home', compact('balitaSehat', 'balitaStunting', 'balitaPerluPerhatian', 'balitaPerluDiverifikasi', 'formattedData'));
    }

    public function index($lingkungan = null){
        if($lingkungan){
            $balita = DataBalita::where('lingkungan', $lingkungan)->get();
        } else {
            return redirect()->route('home');
        }
        return view('balita_index', compact('balita', 'lingkungan'));
    }

    public function detectStunting(Request $request)
    {
        $stuntingService = new StuntingDetectionService();
        $result = $stuntingService->assessStunting(
            $request->id_balita,
            $request->id_perkembangan
        );
        
        return response()->json($result);
    }
}
