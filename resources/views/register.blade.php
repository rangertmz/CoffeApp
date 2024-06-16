
@extends('layouts.layout')

@if (session('error'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'El Email o Username ya existen',
  showConfirmButton: true,
  
})
</script>
@endif
@section('content')

    <!-- Reservation Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Registrarse</h1>
                            <form class="mb-5" action="/register" method="POST">
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
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Iniciar Sesion</button>
                                    <a class="font-weight-bold" href="login">Ya tiene una cuenta? Inicie Sesion Aqui</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    @endsection