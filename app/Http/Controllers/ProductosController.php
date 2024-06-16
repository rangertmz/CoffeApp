<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    //
    public function show(){
        $cafes=Cafe::all();
        $datos = DB::table('productos')->join('cafes','productos.tipo','=','cafes.id')
        ->select('productos.*','cafes.tipo as nombre_cafe')->paginate(5000);

        return view('dashboard.productos', compact('cafes','datos'));
    }
    public function create(request $request){

        $request->validate([
            'nombre'=>'required',
            'precio'=>'required',
            'descripcion'=>'required',
            'archivo'=>'required|image|mimes:png,jpg,jpeg,webp,svg',
            'tipo'=>'required|exists:cafes,id',
        ]);
    
        // Crea un nuevo producto con los valores del formulario
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->tipo = $request->input('tipo');
        $producto->archivo = $request->input('archivo');
        
        // Guarda la imagen en la carpeta public/images
        $imagen = $request->file('archivo');
        $nombreImagen = uniqid('img_') . '.' . $imagen->getClientOriginalExtension();
        $imagen->storeAs('public/img/', $nombreImagen);
    
        // Actualiza la ruta de la imagen del producto en la base de datos
        $producto->archivo = asset('storage/img/' . $nombreImagen);
    
        // Guarda el producto en la base de datos
        $producto->save();
    
        return back()->with('correcto','Producto Agregado');

        }
        public function destroy($id)
        {
            $producto = Producto::find($id);
            if ($producto) {
                Storage::delete('public/img/' . $producto->imagen);
                $producto->delete();
                return back()->with('eliminado','eliminado');
            } else {
                return back();
            }
        }
        public function edit($id){
            $producto = Producto::findOrFail($id);
            $datos = DB::table('productos')->join('cafes','productos.tipo','=','cafes.id')
        ->select('productos.*','cafes.tipo as nombre_cafe')->paginate(5000);
            $cafes = Cafe::pluck('tipo', 'id')->unique();

    return view('dashboard.edits.product', [
        'producto' => $producto,
        'cafes' => $cafes,
        'datos'=>$datos
    ]);
        }

        public function update(Request $request, $id){
            
            $request->validate([
                'nombre'=>'required',
                'precio'=>'required',
                'descripcion'=>'required',
                'archivo'=>'image|mimes:png,jpg,jpeg,webp,svg',
                'tipo'=>'required|exists:cafes,id',
                
            ]);

            $producto = Producto::findOrFail($id);

// Actualiza los campos del producto con los valores del formulario
$producto->nombre = $request->input('nombre');
$producto->precio = $request->input('precio');
$producto->descripcion = $request->input('descripcion');
$producto->tipo = $request->input('tipo');

            
$imagen = $request->file('archivo');

if ($imagen) {
    // Genera un nombre único para la imagen
    $nombreImagen = uniqid('img_') . '.' . $imagen->getClientOriginalExtension();

    // Guarda la imagen en la carpeta public/images
    $imagen->storeAs('public/img/', $nombreImagen);

    // Actualiza la ruta de la imagen del producto en la base de datos
    $producto->archivo = asset('storage/img/' . $nombreImagen);
}
            
            $producto->save();

            return redirect()->route('produc',$producto->$id)->with('actualizado','Producto Actualizado');
            
    }
}
