<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurclientController extends Controller
{
    public function index(){
        return view('pages.Ourclient');
    }
}
