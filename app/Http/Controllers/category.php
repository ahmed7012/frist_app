<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category extends Controller
{
    public function create () {
        return view('categories.create');
    }
}

