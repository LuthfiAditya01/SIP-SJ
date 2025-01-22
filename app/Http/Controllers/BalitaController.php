<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBalita;

class BalitaController extends Controller
{
    public $userModel;

    public function home(){
        $balitaSehat = DataBalita::where('is_stunting', '=', 'Sehat')->get();
        $balitaStunting = DataBalita::where('is_stunting', '=', 'Stunting')->get();
        return view('home');
    }

    public function index(){
        $balita = DataBalita::all();
        return view('balita_index', compact('balita'));
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
