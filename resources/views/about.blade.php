@extends('layout')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Conocenos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Conocenos</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre Nosotros</h4>
                <h1 class="display-4">Sirviendo desde 1950</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Historia</h1>
                    <p>La cafetería "KOPPE" se hizo famosa por su delicioso café tostado y su ambiente acogedor y hogareño. Los clientes a menudo regresaban por la cálida bienvenida de su personal amable y servicial.

                    </p>
                    <a href="about" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Leer Mas</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Vision</h1>
                    <p>En mi visión, la cafetería "KOPPE" es un lugar acogedor y moderno, decorado con paredes de ladrillo expuesto y muebles de madera rústica. El aroma del café tostado y horneado inunda el espacio, atrayendo a los clientes a disfrutar de su café de la mañana o una taza de té por la tarde.

                    </p>
                    
                    <a href="about" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Leer Mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


@endsection