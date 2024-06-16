@extends('layouts.clientelayout')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Servicios</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Servicios</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Service Start -->
     <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestros Servicios</h4>
                <h1 class="display-4">Café fresco y orgánico.</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Entrega a domicilio más rápida.</h4>
                            <p class="m-0">La cafetería "KOPPE" se enorgullece de ofrecer el servicio de "Entrega a domicilio más rápida" en toda la ciudad.                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Café en grano fresco.</h4>
                            <p class="m-0">En nuestra cafetería, ofrecemos una amplia variedad de granos de café, desde suaves y afrutados hasta fuertes y ahumados, para satisfacer todos los gustos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>El mejor café de calidad.</h4>
                            <p class="m-0">En nuestra cafetería, el café no es solo una bebida, es una experiencia. Desde el aroma tentador hasta el sabor rico y profundo, nos aseguramos de que cada taza te haga sentir como si estuvieras bebiendo la perfección.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Reserva de mesa en línea.</h4>
                            <p class="m-0">Nuestra cafetería, "El Oasis del Café", ofrece un servicio de Reserva de Mesa en Línea para que nuestros clientes puedan asegurarse de tener un lugar en nuestra popular cafetería. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


@endsection