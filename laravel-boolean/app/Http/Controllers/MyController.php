<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return view('homepage');
    }

    public function privacypolicy() {
        return view('privacy-policy');
    }

    public function FAQ() {
        return view('faq');
    }
}
