@extends('layouts.adminlayout')
@section('content')
@if (session('correcto'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Usuario Agregado',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
@if (session('eliminado'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Usuario Eliminado',
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
  title: 'Usuario Actualizado',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
    <div class="container py-5">

        <div class="row" style="padding-top: 100px">
            <h1 class="text-center">Usuarios</h1>
            <div class=" col-sm-4 mb-5">
                <form class="mb-5" action="{{route('usuarios.create')}}" method="POST">
                    <h1>Añadir Usuario</h1>
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control bg-transparent border-primary p-4" placeholder="Nombre"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control bg-transparent border-primary p-4" placeholder="Username"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                            required="required" />
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control bg-transparent border-primary p-4" placeholder="Contraseña"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control bg-transparent border-primary p-4" placeholder="Repita su contraseña"
                            required="required" />
                    </div>
                    
                    <div>
                        <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Añadir</button>
                    </div>
                </form>
            </div>

            <div class=" col-sm-8 mb-5 shadow rounded" style="padding:20px ">
                <table id="example" class="table table-hover table-borderless dt-responsive nowrap" style="width:100%;">
                    <thead>
                        <tr class=" bg-primary">
                            <th class="text-center">Id</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $row)
                            <tr>
                                <td class="text-center">{{ $row->id }}</td>
                                <td class="text-center">{{ $row->name }}</td>
                                <td class="text-center">{{ $row->username }}</td>
                                <td class="text-center">{{ $row->email }}</td>
                                <td class="text-center">
                                    <form action="{{ route('usuarios.destroy', $row->id) }}" class="usuarios">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('usuarios.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
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
