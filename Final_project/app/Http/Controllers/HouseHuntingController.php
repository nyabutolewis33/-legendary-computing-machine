<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseHuntingController extends Controller
{
    public function index()
    {
        return view('Frontend.home');
    }

    public function products()
    {
        return view('Frontend.products');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function contact()
    {
        return view('Frontend.contacts');
    }

    public function faq()
    {
        return view('Frontend.faq');
    }

    public function productDetail()
    {
        return view('Frontend.product-detail');
    }

    public function signIn()
    {
        return view('Frontend.sign-in');
    }

    public function signUp()
    {
        return view('Frontend.sign-up');
    }
}