<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }
}