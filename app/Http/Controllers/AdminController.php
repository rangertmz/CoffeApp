<?php

namespace App\Http\Controllers;

use App\Models\Reservacione;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function show(){
        $datos=User::latest()->take(5)->get();
        $datos2=Reservacione::latest()->take(5)->get();
        return view('dashboard.dashboard',compact('datos','datos2'));
    }
}
