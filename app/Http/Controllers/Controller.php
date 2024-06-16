<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Persona;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $productosA = DB::table('productos')->where('tipo', '2')->get();
        $productosB = DB::table('productos')->where('tipo', '1')->get();
        $personas=Persona::all();
        return view('index',[
            'productosA' => $productosA,
            'productosB' => $productosB,
            'personas'=>$personas
        ]);
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function Menu(){
        $productosA = DB::table('productos')->where('tipo', '2')->get();
        $productosB = DB::table('productos')->where('tipo', '1')->get();
        return view('menu',[
            'productosA' => $productosA,
            'productosB' => $productosB,
        ]);
    }
    public function reservation(){
        $personas=Persona::all();
        return view('reservation',['personas'=>$personas]);
    }
    public function contact(){
        return view('contact');
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
    public function reservacion(Request $request)
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
}
