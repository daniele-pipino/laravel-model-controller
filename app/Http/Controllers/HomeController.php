<?php

namespace App\Http\Controllers;

use App\Movie;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
