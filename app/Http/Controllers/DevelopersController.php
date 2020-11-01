<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DevelopersAddRequest;
use App\Http\Requests\DevelopersSearchRequest;
use App\Models\developers;
use App\Models\games;

class DevelopersController extends Controller
{	
	public function add(DevelopersAddRequest $req)
	{
		$developers = new developers();

		$developers->name = $req->input('name');
		$developers->president = $req->input('president');
		$developers->year_of_creation = $req->input('year_of_creation');

		$developers->save();

		return redirect()->route('developers');
	}

    public function allData()
    {
        return view('developers', ['data' => developers::all()]);
    }

    public function showOneDeveloper($id)
    {
        return view('one_developer', ['data' => developers::find($id)]);
    }

    public function updateDeveloperData($id)
    {
        return view('update_developer', ['data' => developers::find($id)]);
    }

    public function deleteDeveloperData($id)
    {	
        games::where('developer', '=', developers::find($id)->name)->delete();

        developers::find($id)->delete();

        return redirect()->route('developers');
    }

    public function updateDeveloperDataSubmit($id, DevelopersAddRequest $req)
    {
        $developer = developers::find($id);
        
        $developer->name = $req->input('name');
        $developer->president = $req->input('president');
        $developer->year_of_creation = $req->input('year_of_creation');

        $developer->save();

        return redirect()->route('one_developer_data', $id);
    }

    public function sort(Request $req)
    {
        $field = $req->input('field');
        return view('developers', ['data' => developers::orderBy($field, "asc")->get()]);
    }

    public function searchDeveloper(DevelopersSearchRequest $req)
    {
        $developer_name = $req->input('name');

        $developer = developers::where('name', '=', $developer_name)->get();
        if(!isset($developer[0])){
            echo "<script>alert('Компании с таким названием не существует!')</script>";
            return redirect()->route('developers');
        }
        $id = $developer[0]->id;
            
        return redirect()->route('one_developer_data', $id); 
    }
}
