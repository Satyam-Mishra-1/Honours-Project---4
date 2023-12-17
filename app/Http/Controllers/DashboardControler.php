<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index(){


        $idea = new Idea() ;
        $idea->content = "test" ; 

        return view('welcome');
    }
}
