<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function viewPersonList()
    {
        $persons = Person::orderBy('id', 'desc')->get();
        return view('persons.view-person-list',compact('persons'));
    }
}
