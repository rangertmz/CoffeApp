<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Persona;
use App\Models\Reservacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //
    public function show(){
        $productosA = DB::table('productos')->where('tipo', '2')->get();
        $productosB = DB::table('productos')->where('tipo', '1')->get();
        $personas=Persona::all();
        return view('cliente.home',[
            'productosA' => $productosA,
            'productosB' => $productosB,
            'personas'=>$personas
        ]);
    }
    public function createreservacion(Request $request)
    {

        if (!auth()->check()) {
            // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
            return redirect()->route('login')->with('inicie', 'Por favor, inicie sesión para hacer una reserva.');
        }
        // Obtener la fecha de la reserva
        $fecha = $request->input('fecha');
    
        // Obtener el número de reservaciones hechas para la fecha en cuestión
        $reservaciones = DB::table('reservaciones')
            ->whereDate('fecha', $fecha)
            ->count();
    
        // Comprobar que el número de reservaciones no exceda el límite de 20
        if ($reservaciones >= 4) {
            return back()->with('limite','reservacion no agregada');
        }
    
        // Si el número de reservaciones es menor que 20, entonces se puede guardar la reserva en la base de datos
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $hora = $request->input('hora');
        $personas = $request->input('personas');
    
        DB::table('reservaciones')->insert([
            'nombre' => $nombre,
            'email' => $email,
            'fecha' => $fecha,
            'hora' => $hora,
            'personas' => $personas
        ]);
    
        // Aquí puedes redirigir al usuario a una página de confirmación o mostrar algún mensaje de éxito.
        return back()->with('agregada','reservacion agregada');
    }
    public function conocenos(){
        return view('cliente.conocenos');
    }
    public function servicios(){
        return view('cliente.servicios');
    }
    public function menu(){
        $productosA = DB::table('productos')->where('tipo', '2')->get();
        $productosB = DB::table('productos')->where('tipo', '1')->get();
        return view('cliente.menu',[
            'productosA' => $productosA,
            'productosB' => $productosB,
        ]);
    }
    public function mireservacion(){
        $personas=Persona::all();
        $user = Auth::user(); // Obtener el usuario autenticado
        $reservaciones = Reservacione::where('email', $user->email)->get(); // Obtener las reservaciones del usuario autenticado
        return view('cliente.misreservaciones',['personas'=>$personas, 'reservaciones'=>$reservaciones]);
    }
    public function contactanos(){
        return view('cliente.contactanos');
    }
    public function mensaje(Request $request){
        try{
            $request->validate([
                'nombre'=>'required',
                'email'=>'required',
                'mensaje'=>'required',
                'telefono'=>'required',
            ]);
            
            $input = $request->all();
            
            $sql=Mensaje::create($input);
            
                }
                catch (\Throwable $th) {
                    $sql=0;
                }
                if($sql==true){
                    return back()->with("agregado","mensaje Agregado");
                }else{
                    return back()->with("incorrecto","Error");
                }
        
    }
}
