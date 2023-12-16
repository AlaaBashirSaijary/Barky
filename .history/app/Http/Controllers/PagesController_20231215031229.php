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
        return view("pages.thankyou");
    }
    public function getPages3(){
        return view("pages.bl");
    }
    public function getPages4(){
        return view("pages.thankyou");
    }
    public function getPages5(){
        return view("pages.thankyou");
    }
    public function getPages6(){
        return view("pages.thankyou");
    }
    public function getPages7(){
        return view("pages.thankyou");
    }
    public function getPages8(){
        return view("pages.thankyou");
    }

}
