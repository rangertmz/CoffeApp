@extends('layouts.adminlayout')
@section('content')
@if (session('eliminado'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Reservacion Eliminada',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
    <div class="container py-5" >
        <div class="row" style="padding-top:100px">
            <h1 class="text-center">Reservaciones</h1>
            <div class="col-sm-4">
                <form action="{{ route('reservacion.update', $producto->id) }}" class=" mb-1 shadow" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <h2 class="text-center">Modificar Reservacion</h2>
    
                    <div class="form-group">
                        <input type="text" name="nombre" class=" form-control bg-transparent border-primary p-3" required
                            placeholder="Nombre" value="{{ old('nombre', $producto->nombre) }}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class=" form-control bg-transparent border-primary p-3" required
                            placeholder="Nombre" value="{{ old('email', $producto->email) }}">
    
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha" class=" form-control bg-transparent border-primary p-3" required
                            placeholder="Precio" value="{{ old('fecha', $producto->fecha) }}">
                    </div>
                    <div class="form-group">
                        <input type="time" name="hora" class=" form-control bg-transparent border-primary p-3" required
                            placeholder="Precio" value="{{ old('hora', $producto->hora) }}">
                    </div>
                    <div class="form-group">
                        <select name="personas" required class=" form-select  border-primary bg-transparent">
                            @foreach ($personas as $id => $tipo)
                                <option value="{{ $id }}"
                                    {{ old('personas', $producto->personas) == $id ? 'selected' : '' }}>
                                    {{ $tipo }}
                                </option>
                            @endforeach
    
    
                        </select>
                    </div>
    
                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Modificar</button>
    
                </form>
            </div>

            <div class=" col-sm-8 mb-5 shadow rounded" style="padding:20px ">
                <table id="example" class="table table-hover table-borderless dt-responsive nowrap" style="width:100%;">
                    <thead>
                        <tr class=" bg-primary">
                            <th class="text-center">Id</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Hora</th>
                            <th class="text-center">Personas</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $row)
                            <tr>
                                <td class="text-center">{{ $row->id }}</td>
                                <td class="text-center">{{ $row->nombre }}</td>
                                <td class="text-center">{{ $row->email }}</td>
                                <td class="text-center">{{ $row->fecha }}</td>
                                <td class="text-center">{{ $row->hora }}</td>
                                <td class="text-center">{{ $row->personas }}</td>
                                <td class="text-center">
                                    <form action="{{ route('reservacion.destroy', $row->id) }}" class="reservacion">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('reservacion.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
                                                class="fa-solid fa-pencil"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
