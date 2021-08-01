<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        $hackathons = Hackathon::all();

        return view('index', ['hackathons'=>$hackathons]);
        
    }
}
