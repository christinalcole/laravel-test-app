<?php

namespace App\Http\Controllers;

use App\Person;

class PeopleController extends Controller
{
    public function index(){
      $people = Person::all();

      return view('people.index', compact('people'));
    }

    public function show($id){
      $person = Person::find($id);

      return view('people.show', compact('person'));
    }
}
