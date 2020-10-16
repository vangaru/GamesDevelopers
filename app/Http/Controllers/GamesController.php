<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GamesAddRequest;
use App\Models\games;

class GamesController extends Controller
{
    public function add(GamesAddRequest $req)
    {
    	$games = new games();
    	
    	$games->name = $req->input('game_name');
    	$games->developer = $req->input('dev_name');
    	$games->year_of_creation = $req->input('year');
    	$games->platforms = $req->input('platforms');

    	$games->save();

    	return redirect()->route('games');
    }

    public function allData(){
    	return view('games', ['data' => games::all()]);
    }
}
