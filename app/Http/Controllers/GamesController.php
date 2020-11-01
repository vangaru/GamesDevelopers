<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GamesAddRequest;
use App\Http\Requests\GamesSearchRequest;
use App\Models\games;
use App\Models\tournirs;

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

    public function allData()
    {
        return view('games', ['data' => games::all()]);
    }

    public function showOneGame($id)
    {
        return view('one_game', ['data' => games::find($id)]);
    }

    public function updateGameData($id)
    {
        return view('update_game', ['data' => games::find($id)]);
    }

    public function deleteGameData($id)
    {
        tournirs::where('game', '=', games::find($id)->name)->delete();

        games::find($id)->delete();

        return redirect()->route('games');
    }

    public function updateGameDataSubmit($id, GamesAddRequest $req)
    {
        $game = games::find($id);
        
        $game->name = $req->input('game_name');
        $game->developer = $req->input('dev_name');
        $game->year_of_creation = $req->input('year');
        $game->platforms = $req->input('platforms');

        $game->save();

        return redirect()->route('one_game_data', $id);
    }

    public function searchGame(GamesSearchRequest $req)
    {
        $game_name = $req->input('search_game_name');

        $game = games::where('name', '=', $game_name)->get();
        if(!isset($game[0])){
            echo "<script>alert('Игры с таким названием не существует!')</script>";
            return redirect()->route('games');
        }
        $id = $game[0]->id;
            
        return redirect()->route('one_game_data', $id); 
    }

    public function sort(Request $req)
    {
        $field = $req->input('field');
        return view('games', ['data' => games::orderBy($field, "asc")->get()]);
    }

}
