@extends('layouts.clientelayout')
@section('content')
@if (session('agregado'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Mensaje Enviado',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Contactanos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Contactanos</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactanos</h4>
                <h1 class="display-4">Sientete libre de contactarnos</h1>
            </div>
            
            <div class="row">
                <div class="col-md-6 pb-5">
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Direccion</h4>
                        <p>123 Street, New York, USA</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Telefono</h4>
                        <p>+012 345 6789</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Email</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
               
                <div class="col-md-6 pb-5">
                    
                    <div class="contact-form">
                        
                        <form method="post" action="{{route('cliente.msj')}}">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="nombre" placeholder="Nombre"
                                    required="required" name="nombre" />
                                <p></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control bg-transparent p-4" id="email" placeholder="Email"
                                    required="required" name="email"  />
                               <p></p>
                            </div>
                            <div class="control-group">
                                <input type="number" maxlength="10" class="form-control bg-transparent p-4" id="subject" placeholder="Telefono"
                                    required="required" name="telefono" />
                                <p></p>
                            </div>
                            <div class="control-group">
                                <textarea maxlength="255" class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Mensaje"
                                    required="required" name="mensaje"
                                    ></textarea>
                                <p></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Enviar
                                    Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @endsection