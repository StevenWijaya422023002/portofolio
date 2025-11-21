<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\foto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
      $infos = Info::all();
       $foto  = Foto::all();     

        return view('dashboard', compact('infos', 'foto'));
       
    }
}
