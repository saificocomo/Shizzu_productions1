<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    //
    public function submit(Request $request){
        $feedback = new Feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->save();
        echo"Feedback submitted";
        return redirect()->back();

    }
    public function read(){
        $dataall=Feedback::all();
        return view('admin', compact('dataall'));
    }
}
