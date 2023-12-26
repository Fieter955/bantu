<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        return view('scores', [
            'scores'=>$scores
        ]);
    }

    public function search(Request $request)
    {
        $skor = $request->input('skor');
        $scores = Score::where('skor', $skor)->get();
        return view('scores', [
            'scores'=>$scores
        ]);
    }

}
