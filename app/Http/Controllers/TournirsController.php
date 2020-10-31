<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TournirsAddRequest;
use App\Http\Requests\TournirsSearchRequest;
use App\Models\tournirs;

class TournirsController extends Controller
{
	public function add(TournirsAddRequest $req)
	{
		$tournir = new tournirs();

		$tournir->name = $req->input('name');
		$tournir->game = $req->input('game');
		$tournir->date_of_tournir = $req->input('date_of_tournir');

		$tournir->save();

		return redirect()->route('tournirs');
	}
	
    public function allData()
    {
        return view('tournirs', ['data' => tournirs::all()]);
    }

    public function updateTournirData($id)
    {
        return view('update_tournir', ['data' => tournirs::find($id)]);
    }

    public function updateTournirDataSubmit($id, TournirsAddRequest $req)
    {
        $tournir = tournirs::find($id);
        
        $tournir->name = $req->input('name');
        $tournir->game = $req->input('game');
        $tournir->date_of_tournir = $req->input('date_of_tournir');

        $tournir->save();

        return redirect()->route('one_tournir_data', $id);
    }

    public function showOneTournir($id)
    {
        return view('one_tournir', ['data' => tournirs::find($id)]);
    }

	public function deleteTournirData($id)
    {
        tournirs::find($id)->delete();

        return redirect()->route('tournirs');
    }

    public function searchTournir(TournirsSearchRequest $req)
    {
        $tournir_name = $req->input('search_tournir_name');

        $tournir = tournirs::where('name', '=', $tournir_name)->get();
        if(!isset($tournir[0])){
            echo "<script>alert('Турнира с таким названием не существует!')</script>";
            return redirect()->route('tournirs');
        }
        $id = $tournir[0]->id;
            
        return redirect()->route('one_tournir_data', $id); 
    }
}
