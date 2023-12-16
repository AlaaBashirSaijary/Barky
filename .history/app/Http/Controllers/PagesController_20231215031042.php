<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getPages1(){
        return view("pages.home");
    }
    public function getPages2(){
        return view("pages.th");
    }
}
