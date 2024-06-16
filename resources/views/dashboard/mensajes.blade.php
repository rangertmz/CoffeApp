@extends('layouts.adminlayout')

@section('content')

@if (session('eliminado'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Mensaje Eliminado',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
<div class="container-fluid py-5" >

    <div class="container" style="padding-top: 100px">
        <h1 class="text-center">Mensajes</h1>
        <div class=" mb-5 shadow rounded" style="padding:20px ">
            <table id="example" class="table table-hover table-borderless dt-responsive nowrap" style="width:100%;">
                <thead>
                    <tr class=" bg-primary">
                        <th class="text-center">Id</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">mensaje</th>
                        <th class="text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $row)
                    <tr>
                        <td class="text-center">{{$row->id}}</td>
                        <td class="text-center">{{$row->nombre}}</td>
                        <td class="text-center">{{$row->email}}</td>
                        <td class="text-center">{{$row->telefono}}</td>
                        <td class="text-center">{{$row->mensaje}}</td>
                        <td class="text-center"><form action="{{route('mensajes.destroy',$row->id)}}" class="eliminarmsj">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
    
</div>
    
@endsection