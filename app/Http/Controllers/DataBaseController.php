<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\developers;
use App\Models\games;
use App\Models\tournirs;

class DataBaseController extends Controller
{
    public function allData()
    {
        return view('database',   ['DevelopersData' => developers::all(),
    							   'GamesData' => games::all(),	
    							   'TournirsData' => tournirs::all()]);
    }
}
