<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();
        //dump($movies);

        return view('home', compact('movies'));
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }
}
