@extends('layouts.adminlayout')

@section('content')

<div class="container py-5">

    <div class="row" style="padding-top: 100px">
        <h1 class="text-center">Bienvenido {{ auth()->user()->name}}</h1>
        <div class=" col-xl-6 col-md-6 mb-5 shadow rounded" style="padding:20px ">
            <table  class="table table-hover table-borderless dt-responsive nowrap" style="width:100%;">
                <h4 class="text-center">Ultimos Usuarios</h4>
                <thead>
                    <tr class=" bg-primary">
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Username</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $row)
                        <tr>
                            <td class="text-center">{{ $row->name }}</td>
                            <td class="text-center">{{ $row->username }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class=" col-xl-6 col-md-6 mb-5 shadow rounded" style="padding:20px ">
            <h4 class="text-center">Ultimas Reservaciones</h4>
            <table  class="table table-hover table-borderless dt-responsive nowrap" style="width:100%;">
                <thead>
                    <tr class=" bg-primary">
                       
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Fecha</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos2 as $row)
                        <tr>
                            
                            <td class="text-center">{{ $row->nombre }}</td>
                            <td class="text-center">{{ $row->fecha }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
    
@endsection