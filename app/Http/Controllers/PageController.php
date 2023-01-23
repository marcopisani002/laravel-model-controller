<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }


    function home()
    {


        $movies = Movie::all();

        dump($movies);

        return view("home", [
            "movies" => $movies
        ]);
    }
}
