<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    

    public function sendMessage(Request $request){

        $message = new message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->content = $request->content;
        $message->save();
        return back()->with('data inserted successful');

    }
}
