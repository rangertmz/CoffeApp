<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensajesController extends Controller
{
    //
    public function show(){
        $datos=Mensaje::all();
        return view('dashboard.mensajes', compact('datos'));
    }
    public function delete($id){
        try {
            $sql=DB::delete("delete from mensajes where id=$id");
        } catch (\Throwable $th) {
            $sql=0;
        }
        if($sql==true){
            return back()->with("eliminado","Eliminado");
        }else{
            return back()->with("incorrecto","Error");
        }
    }
    
}
