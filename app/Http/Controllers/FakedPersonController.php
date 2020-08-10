<?php

namespace App\Http\Controllers;

use App\Models\FakePerson;
use Illuminate\Http\Request;

class FakedPersonController extends Controller
{
    public function index(Request $request){
        $fakedPersons = [];
        $searchTerm = $request->input('search');

        if(isset($searchTerm)){
            $fakedPersons = FakePerson::query()
                ->whereLike(['first_name', 'last_name'], $request->input('search'))
                ->get();
        }else{
            $fakedPersons = FakePerson::limit(100)->get();
        }





        return view("fake_person_list", compact('fakedPersons'));
    }

    public function partialPersonList(Request $request){
        $fakedPersons = [];
        $searchTerm = $request->input('search');

        if(isset($searchTerm)){
            $fakedPersons = FakePerson::query()
                ->whereLike(['first_name', 'last_name'], $request->input('search'))
                ->get();
        }else{
            $fakedPersons = FakePerson::limit(100)->get();
        }
        $personList = null;
        foreach ($fakedPersons as $key => $person) {
            $personList .= "<li>".$person->first_name ." ". $person->last_name."</li>";
        }

        return $personList;
    }


}
