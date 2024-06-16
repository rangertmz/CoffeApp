@extends('layout')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Reservaciones</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Reservation</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">30% de Descuento</h1>
                                <h1 class="text-white">Para Reservas en Linea</h1>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Reserva Tu Mesa</h1>
                            <form class="mb-5" action="{{ route('index.reservacion') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="text-white">Nombre</label>
                                    <input type="text"
                                        class="form-control bg-transparent border-primary p-4 text-white"
                                        placeholder="Nombre" required="required" name="nombre" />
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Email</label>
                                    <input type="email"
                                        class="form-control bg-transparent border-primary p-4 text-white"
                                        placeholder="Email" required="required" name="email" />
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Fecha</label>
                                    <input type="date" name="fecha"
                                        class="form-control bg-transparent border-primary p-4 text-white"
                                        placeholder="Fecha" />

                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Hora</label>
                                    <input type="time" name="hora"
                                        class="form-control bg-transparent border-primary p-4 text-white"
                                        placeholder="Hora" />

                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Numero de personas</label>
                                    <select name="personas" class="custom-select border-primary px-4"
                                        style="height: 49px;">
                                        <option selected>Seleccione el numero dersonas</option>
                                        @foreach ($personas as $item)
                                            <option value="{{ $item->id }}">{{ $item->personas }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3"
                                        type="submit">Reservar Ahora</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


@endsection