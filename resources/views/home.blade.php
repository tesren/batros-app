@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Preventa de condominios de lujo en Marina Vallarta')}}</title>
    <meta name="description" content="{{__('Batros Marina Residences consta de tan solo 35 condominios de lujo, con modelos de 1, 2 y 3 recámaras distribuidas en 6 niveles de departamentos y una terraza con las mejores amenidades')}}">
@endsection

@section('content')

    <div class="position-relative">
        <img class="w-100" src="{{asset('img/home-landing.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; z-index:1;">
        <div class="bg-blue-gradient"></div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-3"><i class="fa-solid fa-circle-chevron-down"></i></a>
            <h1 class="text-white fs-2 mb-5 fw-light">{{__('Continúa escribiendo tu historia en Batros Marina Residences…')}}</h1>
        </div>

        <img width="330px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:80%; transform: scaleX(-1);">

        <img width="330px" class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:80%;">

    </div>

    {{-- Descripción --}}
    <div class="row justify-content-center pt-5 mb-6" id="info">
        <div class="col-12 col-lg-10 col-xl-5 mb-4">
            <img src="{{asset('img/description-img.jpg')}}" alt="Batros Marina Residences" class="w-100 px-0 rounded-2 shadow-6" loading="lazy">
        </div>

        <div class="w-100"></div>

        <div class="col-12 col-lg-10 col-xl-6 text-center">
            <p class="fw-light text-lighterblue fs-5">{{__('Batros Marina Residences está inspirado en la arquitectura mexicana contemporánea. El diseño elegante y atemporal da como resultado un edificio sobrio y elegante, de colores neutrales, que se integra de manera armónica a su entorno en donde sus habitantes se sentirán realmente en casa.')}}</p>
            <a href="#" class="btn btn-blue">{{__('Ver Inventario')}}</a>
        </div>

    </div>

    {{-- Amenidades --}}
    <div class="mb-6 position-relative text-center py-5">
        <h2 class="text-lightblue fs-1 text-center fw-light mb-5">{{__('Amenidades')}}</h2>

        <div class="row justify-content-center text-lightblue mb-5">
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/rooftop.png')}}" alt="{{__('Terraza 360')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Terraza 360')}}°</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/bbq.png')}}" alt="{{__('Asador y Bar')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Asador y Bar')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/lounge.png')}}" alt="{{__('Mindfulness Lounge')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Mindfulness Lounge')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/gym.png')}}" alt="{{__('Gimnasio')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Gimnasio')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/pool.png')}}" alt="{{__('Alberca Sky')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Alberca Sky')}}</div>
            </div>
        </div>

        <img width="250px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:60%; transform: scaleX(-1);" loading="lazy">

        <a href="{{route('amenities')}}" class="btn btn-blue">{{__('Conocer más')}}</a>

    </div>

    {{-- Amantes del golf --}}
    <div class="row justify-content-evenly mb-6 py-5">
        <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">
            <h2 class="fs-1 text-white mb-4">
                {{__('Para los amantes')}} <br>
                <span class="fs-0 text-lightblue">{{__('del Golf')}}</span>
            </h2>
            <p class="text-lighterblue fs-5 fw-light mb-5">{{__('Batros Marina Residences colinda con uno de los campos de golf más célebres del país: Marina Vallarta Club de Golf, un extraordinario campo de 18 hoyos diseñado por el famoso arquitecto estadounidense Joe Finger, enmarcado por abundante naturaleza, lagos y espectaculares vistas a las montañas de la sierra madre y el pacífico.')}}</p>
            <a href="{{route('lifestyle')}}" class="btn btn-blue">{{__('Conocer más')}}</a>
        </div>

        <div class="col-12 col-lg-4 col-xl-3 position-relative">
            <img src="{{asset('img/golf.jpg')}}" alt="Golf Marina Vallarta" class="w-100 rounded-2 shadow-6 position-relative" style="z-index:5;" loading="lazy">
            <img width="230px" class="d-none d-lg-block position-absolute top-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 1; left:75%; transform: rotate(180deg);" loading="lazy">
        </div>

    </div>

    {{-- Ubicación --}}
    <div class="svg-container">

        <img class="w-100" src="{{asset('img/batros-map.jpg')}}" alt="Batros Marina Residences Location">

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1920 1081">
            {{-- Título --}}
            <text x="40" y="1040" font-size="84" fill="#1D3F4F">
                {{__('UBICACIÓN')}}
            </text>
        </svg>

        <button type="button" class="btn p-0 position-absolute" style="left:28%; top:8%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('tigre')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Club de Golf El Tigre')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="tigre"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:24%; top:15%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('marina-nuevo')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Marina Nuevo Vallarta')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="marina-nuevo"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:42%; top:9%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('vidanta')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Vidanta')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="vidanta"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:66%; top:33%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('airport')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Aeropuerto Internacional')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="airport"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:62%; top:65%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('marina-golf')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Club de Golf Marina Vallarta')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="marina-golf"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:71%; top:74%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('marina-vallarta')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Marina Vallarta')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="marina-vallarta"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:80%; top:79%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('galerias-vallarta')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Galerías Vallarta')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="galerias-vallarta"></i>
        </button>

        <button type="button" class="btn p-0 position-absolute" style="left:80%; top:84%; --fa-animation-duration:1.5s; z-index: 15 !important;" onclick="removeAnimation('walmart-vallarta')"
            data-bs-container="body" data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-placement="top" data-bs-content="{{__('Walmart & Sams Club')}}">
            <i class="fa-solid fa-location-dot fa-bounce" id="walmart-vallarta"></i>
        </button>

    </div>


    @include('shared.contact-form')


@endsection

@section('javascript')
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        function removeAnimation(id){

            var icon = document.getElementById(id);
            icon.classList.toggle("fa-bounce");

        }

    </script>
@endsection