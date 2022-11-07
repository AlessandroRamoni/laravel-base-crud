<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Comic;

class ComicController extends Controller
{
    //

    public function index(){
        $comics = Comic::all();
        return view('home', compact('comics'));
    }
}
