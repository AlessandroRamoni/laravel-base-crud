<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Comics;

class ComicController extends Controller
{
    //

    public function index(){
        $comics = Comics::all();
        return view('home', compact('comics'));
    }
}
