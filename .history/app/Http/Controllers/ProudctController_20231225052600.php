<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Proudct;
class ProudctController extends Controller
{
    // public function getProudct(string $name){
    // return view("proudct",["name"=>$name]);
    // }
    // public function getProudcts(){
    //     $product=["pro1","pro2","pro3"];
    //     return view("proudct",["proudct"=>$product]);
    //     }
    public function getComments(){
        $comments = DB::table('proudcts')->get()->comments();
        dd( $comments );
    }
    public function gerProudcts(){
        $p
    }

}
