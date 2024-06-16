
@extends('layouts.layout')

@section('content')
@if (session('success'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Cuenta creada',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif
@if (session('inicie'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'warning',
  title: 'Por Favor Inicie Sesion',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

@if (session('message'))
    <script>
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Email o Contraseña incorrectos',
  showConfirmButton: true,
  
})
</script>
@endif

    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Inicia Sesion</h1>
                            <form class="mb-5" action="/login" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                        required="required" />
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control bg-transparent border-primary p-4" placeholder="Contraseña"
                                        required="required" />
                                </div>
    
                                
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Iniciar Sesion</button>
                                    <a class="font-weight-bold" href="register">¿No tiene una cuenta? Registrese Aqui</a>
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