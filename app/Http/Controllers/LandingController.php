<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){ //nama function = index
        return view ('index'); // nama file index.blade.php
    }
}
