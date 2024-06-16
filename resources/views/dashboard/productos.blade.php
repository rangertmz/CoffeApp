@extends('layouts.adminlayout')

@section('content')
    @if (session('correcto'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Producto Agregado',
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
                title: 'Producto Eliminado',
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
                title: 'Producto Actualizado',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif


    <div class="container py-5">

        <div class="row" style="padding-top: 100px">
            <h1 class="text-center">Productos</h1>
            <div class=" col-sm-4 mb-5">
                <form action="{{ route('crud.createp') }}" class=" mb-5 shadow" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-center">Registrar Producto</h2>
                    <br>
                    <div class="form-group">
                        <input type="text" name="nombre" class=" form-control bg-transparent border-primary p-3"
                            required placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <textarea maxlength="255" name="descripcion" cols="73" rows="3" placeholder="Descripcion"
                            class=" form-control bg-transparent border-primary p-3" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="number" name="precio" class=" form-control bg-transparent border-primary p-3"
                            required placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <select name="tipo" required class=" form-select  border-primary bg-transparent">
                            <option value="0">Seleccione el tipo de cafe</option>
                            @foreach ($cafes as $item)
                                <option value="{{ $item->id }}">{{ $item->tipo }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="archivo" class=" form-control bg-transparent border-primary" required
                            placeholder="Nombre">
                    </div>
                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Registrar</button>
                </form>
            </div>

            <div class=" col-sm-8 mb-5 shadow rounded" style="padding:20px ">
                <table id="example" class="table table-hover table-borderless dt-responsive nowrap" style="width:100%;">
                    <thead>
                        <tr class=" bg-primary">
                            <th class="text-center">Id</th>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $row)
                            <tr>
                                <td class="text-center">{{ $row->id }}</td>
                                <td class="text-center"><img src="{{ asset($row->archivo) }}" width="50px" height="50px"
                                        style="border-radius: 50%"></td>
                                <td class="text-center">{{ $row->nombre }}</td>
                                <td class="text-center">{{ $row->descripcion }}</td>
                                <td class="text-center">{{ $row->nombre_cafe }}</td>
                                <td class="text-center">${{ $row->precio }}</td>
                                <td class="text-center">
                                    <form action="{{ route('crud.destroy', $row->id) }}" class="eliminarp">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
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
