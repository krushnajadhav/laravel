<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
    public function index()
    {
        
        $party = new Party;
        $party->full_name = "Krushna jadhav";
        $party->save();
        

        return "Database opration";
        // return view("welcome");
    }

    public function about()
    {
        // return "devloping";
        return view("aboute");
    }
}
