<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::select('select * from teams');
        dd( $members);
        foreach($members as $member){
            echo($member);
        }
       // return view("proudct");
        }
        public function grtAllTeam(){
            $teams=Team::get()_;
           // dd($teams);
           return view("pages.about","teams"->$teams);

        }

}
