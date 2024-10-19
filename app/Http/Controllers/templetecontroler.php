<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templetecontroler extends Controller
{
    
    public function home()
    {
        return view('frontend.home');
        }

}
