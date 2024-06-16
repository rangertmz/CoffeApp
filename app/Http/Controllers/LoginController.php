<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function create() {

        return view('/login');
    }

    public function store() {

        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with('message', 'no se pudo logear');

        } else {

            if(auth()->user()->role == 'admin') {
                return redirect()->to('dashboard');
            } else {
                return redirect()->to('home');
            }
        }
    }

    public function destroy() {

        auth()->logout();
        

        return redirect()->route('index');
    }
}
