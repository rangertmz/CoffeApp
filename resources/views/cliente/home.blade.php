@extends('layouts.clientelayout')
@section('content')
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
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">HEMOS ESTADO SIRVIENDO</h2>
                        <h1 class="display-1 text-white m-0">CAFE</h1>
                        <h2 class="text-white m-0">* DESDE 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">HEMOS ESTADO SIRVIENDO</h2>
                        <h1 class="display-1 text-white m-0">CAFE</h1>
                        <h2 class="text-white m-0">* DESDE 1950 *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


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
                    <p>La cafetería "KOPPE" se hizo famosa por su delicioso café tostado y su ambiente acogedor y hogareño.
                        Los clientes a menudo regresaban por la cálida bienvenida de su personal amable y servicial.

                    </p>
                    <a href="conocenos" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Leer Mas</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Vision</h1>
                    <p>En mi visión, la cafetería "KOPPE" es un lugar acogedor y moderno, decorado con paredes de ladrillo
                        expuesto y muebles de madera rústica. El aroma del café tostado y horneado inunda el espacio,
                        atrayendo a los clientes a disfrutar de su café de la mañana o una taza de té por la tarde.

                    </p>

                    <a href="conocenos" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Leer Mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                            <p class="m-0">La cafetería "KOPPE" se enorgullece de ofrecer el servicio de "Entrega a
                                domicilio más rápida" en toda la ciudad. </p>
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
                            <p class="m-0">En nuestra cafetería, ofrecemos una amplia variedad de granos de café, desde
                                suaves y afrutados hasta fuertes y ahumados, para satisfacer todos los gustos.</p>
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
                            <p class="m-0">En nuestra cafetería, el café no es solo una bebida, es una experiencia. Desde
                                el aroma tentador hasta el sabor rico y profundo, nos aseguramos de que cada taza te haga
                                sentir como si estuvieras bebiendo la perfección.</p>
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
                            <p class="m-0">Nuestra cafetería, "El Oasis del Café", ofrece un servicio de Reserva de Mesa
                                en Línea para que nuestros clientes puedan asegurarse de tener un lugar en nuestra popular
                                cafetería. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Precios</h4>
                <h1 class="display-4 text-white">Precios Competitivos</h1>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Cafe Caliente</h1>
                    @foreach ($productosA as $item)
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset($item->archivo) }}"
                                    alt="">
                                <h5 class="menu-price">${{ $item->precio }}</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>{{ $item->nombre }}</h4>
                                <p class="m-0">{{ $item->descripcion }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cafe Frio</h1>
                    @foreach ($productosB as $item)
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset($item->archivo) }}"
                                    alt="">
                                <h5 class="menu-price">${{ $item->precio }}</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>{{ $item->nombre }}</h4>
                                <p class="m-0">{{ $item->descripcion }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="container-fluid my-5">
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
                            <form class="mb-5" action="{{ route('cliente.reservacion') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="text-white">Nombre</label>
                                    <input type="text"
                                        class="form-control bg-transparent border-primary p-4 text-white"
                                        placeholder="Nombre" required="required" name="nombre"
                                        value="{{ auth()->user()->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Email</label>
                                    <input type="email"
                                        class="form-control bg-transparent border-primary p-4 text-white"
                                        placeholder="Email" required="required" name="email"
                                        value="{{ auth()->user()->email }}" />
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
                                        class="text-white form-control bg-transparent border-primary p-4 "
                                        placeholder="Hora" />

                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Numero de personas</label>
                                    <select name="personas" class=" custom-select border-primary px-4"
                                        style="height: 49px;">
                                        <option value="">Seleccione el numero de personas</option>
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
