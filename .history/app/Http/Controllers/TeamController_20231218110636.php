<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::select('select * from cate');
        dd( $members);
        foreach($members as $member){
            each($member);
        }
       // return view("proudct");
        }
}
