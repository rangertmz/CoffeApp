@extends('layouts.clientelayout')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Precios</h4>
                <h1 class="display-4">Precios Competitivos</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Cafe Caliente</h1>
                    @foreach ($productosA as $item )
                        
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset($item->archivo)}}" alt="">
                            <h5 class="menu-price">${{$item->precio}}</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>{{$item->nombre}}</h4>
                            <p class="m-0">{{$item->descripcion}}</p>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cafe Frio</h1>
                    @foreach ($productosB as $item)
                        
                    
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset($item->archivo)}}" alt="">
                            <h5 class="menu-price">${{$item->precio}}</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>{{$item->nombre}}</h4>
                            <p class="m-0">{{$item->descripcion}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


@endsection