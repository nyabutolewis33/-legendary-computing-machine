<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseHuntingController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
}