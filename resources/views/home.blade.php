@extends('layouts.app')

@section('content')
<div class="container">
    @guest
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="container-lp" style="">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start text-light">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Bienvenido a Plant Hive</h1>
                    <p class="col-lg-10 fs-4">Si ya tienes cuenta, inicia sesión, si no registrate y unete a</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
            </div>
    </div>

    @else
    <p>Hola usuario registrado</p>
    @endguest
</div>
@endsection