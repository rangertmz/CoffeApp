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
@if (session('agregada'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Reservacion Lista',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
@if (session('actualizado'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Reservacion Actualizada',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
@if (session('limite'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'No hay reservaciones disponibles',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
    <div class="container py-5">

        <div class="row" style="padding-top: 100px">
            <h1 class="text-center">Reservaciones</h1>
            <div class=" col-sm-4 mb-5">
                <form action="{{route('reservacion.create')}}" class=" mb-5 shadow" method="POST">
                    @csrf
                    <h2 class="text-center">Registrar Reservación</h2>
                    <br>
                    <div class="form-group">
                        <input type="text" name="nombre" class=" form-control bg-transparent border-primary p-3"
                            required placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class=" form-control bg-transparent border-primary p-3"
                            required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha" class=" form-control bg-transparent border-primary p-3"
                            required placeholder="Fecha">
                    </div>
                    <div class="form-group">
                        <input type="time" name="hora" class=" form-control bg-transparent border-primary p-3"
                            required placeholder="Hora">
                    </div>
                    <div class="form-group">
                        <select name="personas" required class=" form-select  border-primary bg-transparent">
                            <option value="0">Número de personas</option>
                            @foreach ($personas as $item )
                                <option value="{{$item->id}}">{{$item->personas}}</option>
                            @endforeach

                        </select>
                    </div>
                    
                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Registrar</button>

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
