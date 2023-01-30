<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IPitchService;
use Illuminate\Http\Request;

class PitchController extends Controller
{
    public function __construct(
        private readonly IPitchService $pitchService
    )
    {}
    public function getAllPitchs()
    {
        $allPitch = $this->pitchService->getAllPitchs();
        return response()->json([
            "message" => "Successfully",
            "data" => $allPitch
        ]);
    }
    public function getDetailPitch(Request $request) 
    {
        $idPitch = $request->input('id');
        $detailPitch = $this->pitchService->getDetailPitch($idPitch);
        return response()->json(
            [
                "message" =>"Detail successfully",
                "data" => $detailPitch->toarray()
            ]
        );
    }
    public function searchPitch(Request $request) {
        $textSearch = $request->input("textSearch");
        return response()->json(
            [
                "message" => "Search Successfully",
                "data" => $this->pitchService->searchPitch($textSearch)
            ]
        );
    }
}
