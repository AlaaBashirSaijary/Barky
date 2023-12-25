<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Proudct;

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
        return view("pages.blog");
    }
    public function getPages4(){
        $teams=Team::get();
        return view("pages.about",["teams"=>$teams]);
    }
    public function getPages5(){
        return view("pages.contact");
    }
    public function getPages6(){
        $products=Proudct::get();
        return view("pages.shop",["products"=>$products]);
    }
    public function getPages7(){
        return view("pages.singlepost");
    }
    public function getPages8(){
        return view("pages.singleproudct");
    }

}
