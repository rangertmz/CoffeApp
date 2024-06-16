<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    //
    public function show(){
        $datos=User::all();
        return view('dashboard.usuarios', compact('datos'));
    }
    public function create(RegisterRequest $request){
        $user = User::create($request->validated());
       
        return back()->with('correcto', "Account successfully registered.");
    }
    public function edit($id){
        $user = User::findOrFail($id);
        $datos=User::all();
        return view('dashboard.edits.usuario', ['user' => $user,'datos'=>$datos]);
    }
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->username = $request->input('username');
        
        if($request->filled('password')){
            $usuario->password = bcrypt($request->input('password'));
        }
        
        $usuario->save();
        
        return redirect()->route('usuarios.show')->with('actualizado', 'Usuario actualizado correctamente.');
    }
    public function destroy($id){
        try {
            $sql=DB::delete("delete from users where id=$id");
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
