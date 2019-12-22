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

    public function getsignin()
    {
        return view('signin');
    }
    public function getadmin()
    {
        return view('admin');

    }
    public function getadform()
    {
        return view('auditionform');
    }
}
