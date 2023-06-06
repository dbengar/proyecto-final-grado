@extends('layouts.app')

@section('content')

    @guest
        <div class="container col-xl-10 col-xxl-8 px-4 py-5 d-flex align-items-center justify-content-center">
            <div class="container-lp" style="">
                <div class="row align-items-center g-lg-5 py-5">
                <div class="texto col-lg-7 text-center text-lg-start text-light">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Tú jardín conectado</h1>
                    <p class="col-lg-10 fs-4">Si ya tienes cuenta, inicia sesión; si no, regístrate y únete a nosotros.</p>
                </div>
                <div class="text-center text-lg-start">
                    <a href="{{ route('login') }}" class="iniciar-sesion">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="registrar">Registrar</a>
                </div>
                </div>
            </div>
        </div>


    @else
    <div class="container">
        <section class="hero">
            <div class="container">
            <h1>Bienvenido a RaspberryGarden</h1>
            <p>La solución perfecta para tu jardín inteligente</p>
            </div>
        </section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/4946994/pexels-photo-4946994.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Seguro y confiable</h5>
                    <p>Ten el control de tu jardín desde cualquier parte.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.pexels.com/photos/4496368/pexels-photo-4496368.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Monitoreo inteligente</h5>
                    <p>Obtén datos en tiempo real sobre el estado de tu jardín y toma decisiones informadas.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.pexels.com/photos/4750343/pexels-photo-4750343.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Riego automático</h5>
                    <p>Nuestro sistema de riego automático se adapta a las necesidades de tus plantas.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    @endguest

@endsection