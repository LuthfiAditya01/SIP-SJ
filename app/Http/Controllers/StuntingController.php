<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StuntingController extends Controller
{
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
