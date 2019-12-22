<?php

namespace App\Http\Controllers;
use App\Audition;
use Illuminate\Http\Request;


class AudiController extends Controller
{ 
    //
    public function order(Request $req) 
    {
    $audition =new Audition;
    $audition->fname = $req->name;
    $audition->email = $req->email;
    $audition->homeadd = $req->address;
    $audition->dob = $req->birthday;
    $audition->gender = $req->gender;
    $audition->age = $req->age;
    $audition->height = $req->height;
    $audition->pno = $req->cellno;
    $audition->categories = $req->categories;
    
    
    $audition->save();
    return view('Auditionform');
    
    }
}
