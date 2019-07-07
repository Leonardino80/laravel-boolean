<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public function index() {
    return view('home');
  }

  public function privacyPolicy(){
    return view('static-pages.privacy-policy');
  }

  public function jobOpportunities(){
    return view('static-pages.lavora-con-noi');
  }
}
