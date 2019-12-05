<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getvideos()
    {
        return view('videos');
    }

    public function getachs()
    {
        return view('ach');
    }

    public function getreg()
    {
        return view('regform');
    }

    public function getlogin()
    {
        return view('login');
    }
}
