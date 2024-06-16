<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Reservacion;
use App\Models\Reservacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservacionesController extends Controller
{
    //
    public function show(){
        $datos=Reservacione::all();
        $personas=Persona::all();
        return view('dashboard.reservaciones', compact('datos','personas'));
    }
    public function reservacion(Request $request)
    {

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

    public function delete($id){
        try {
            $sql=DB::delete("delete from reservaciones where id=$id");
        } catch (\Throwable $th) {
            $sql=0;
        }
        if($sql==true){
            return back()->with("eliminado","Eliminado");
        }else{
            return back()->with("incorrecto","Error");
        }
    }
    public function edit($id){
        $producto = Reservacione::findOrFail($id);
        $datos=Reservacione::all();
        $personas = Persona::pluck('personas', 'id')->unique();
        return view('dashboard.edits.reservacion', ['producto' => $producto, 'personas'=>$personas,'datos'=>$datos]);
    }
    public function actualizar(Request $request, $id)
{
    // Buscar la reserva por ID
    $reservacion = Reservacione::find($id);

    // Actualizar la información de la reserva
    $reservacion->nombre = $request->input('nombre');
    $reservacion->email = $request->input('email');
    $reservacion->fecha = $request->input('fecha');
    $reservacion->hora = $request->input('hora');
    $reservacion->personas = $request->input('personas');

    // Guardar los cambios en la base de datos
    $reservacion->save();

    // Redirigir al usuario a la página de detalle de la reserva
    return redirect()->route('reservacion.show', $reservacion->id)->with('actualizado', 'Reserva actualizada exitosamente.');
}

 
}
