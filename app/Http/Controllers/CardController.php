<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function getCard(){
        return view("pages.cardScreen");
    }
}
