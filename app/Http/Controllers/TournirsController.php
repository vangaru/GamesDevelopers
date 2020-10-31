<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TournirsAddRequest;
use App\Http\Requests\TournisSearchRequest;
use App\Models\tournirs;

class TournirsController extends Controller
{
    public function allData()
    {
        return view('tournirs', ['data' => tournirs::all()]);
    }
}
