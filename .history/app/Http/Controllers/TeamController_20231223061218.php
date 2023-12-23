<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::select('select * from teams');
        dd( $members);
        foreach($members as $member){
            each($member);
        }
       // return view("proudct");
        }
        public function grtAllTeam(){
            $teams=DB::table('teams')->all();
            foreach()
        }

}
