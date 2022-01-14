<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class homeController extends Controller
{
    public function index(){
        $data = Home::get();
        return view('home.index', compact('data'));
        // return $data;
    }
}
