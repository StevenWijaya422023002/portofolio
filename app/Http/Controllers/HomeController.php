<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\foto;

class HomeController extends Controller
{
    function index() {
      $info = Info::all();
      $foto  = Foto::all();      

        return view('welcome', compact('info', 'foto'));
       
    }
}
