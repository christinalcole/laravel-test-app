<?php

namespace App\Http\Controllers;

use App\Person;

class PeopleController extends Controller
{
    public function index(){
      $people = Person::all();

      return view('people.index', compact('people'));
    }
}
