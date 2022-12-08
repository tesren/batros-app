@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Estilo de Vida')}}</title>
    <meta name="description" content="{{__('Batros Marina Residences está en el corazón de Marina Vallarta, una de las zonas residenciales más exclusivas y con mayor plusvalía de toda la bahía. A pocos minutos podras encontrar el aeropuerto, plazas comerciales, playas y mucho más.')}}">
@endsection

@section('content')

<div class="position-relative">
    <img class="w-100" src="{{asset('img/marina-vallarta.jpg')}}" alt="Marina Vallarta" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
    <div class="bg-blue-gradient"></div>

    <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
        <div class="col-12 align-self-center">
            <h1 class="fs-0 text-white text-uppercase fw-light">{{__('Estilo de Vida')}}</h1>
        </div>
    </div>

    <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
        <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
    </div>

</div>

<div class="row justify-content-center pt-5 mb-6 position-relative" id="info">

    <div class="col-12 col-lg-3">
        <h2 class="text-center mb-5">
            <span class="text-lighterblue fs-0">{{__('Lo Mejor')}}</span> <br>
            <span class="text-white fs-1">{{__('más cerca')}}</span> <br>
            <span class="text-lightblue fs-0">{{__('de ti')}}</span>
        </h2>
        <p class="fs-5 text-lightblue px-0 px-lg-5">{{__('Batros Marina Residences estará en el corazón de Marina Vallarta, una de las zonas residenciales más exclusivas y con mayor plusvalía de toda la bahía.')}}</p>
    </div>

    <div class="col-12 col-lg-5 col-xl-6">
        <img src="{{asset('img/lifestyle-batros.jpg')}}" alt="Batros Marina Residences" class="w-100 shadow-6 rounded-2">
    </div>

    <img class="d-none d-lg-block position-absolute start-0 px-0 top-0" src="{{asset('img/feather.png')}}" alt="" style="width:300px; z-index: 5; transform: scaleX(-1);">

    <img class="d-none d-lg-block position-absolute end-0 px-0" src="{{asset('img/feather.png')}}" alt="" style="width:350px; z-index: 5; top:50%;">

</div>

<h2 class="text-center mb-5">
    <span class="text-white fs-1">{{__('A sólo')}}</span> <br>
    <span class="text-lightblue fs-0">{{__('5 minutos')}}</span>
    <span class="text-white fs-1">{{__('de ti ')}}</span>
</h2>

<div class="row justify-content-center position-relative mb-6">
    <div class="col-12 col-lg-9">
        <div class="svg-container">

            <img src="{{asset('img/near-batros.jpg')}}" alt="Lugares cerca de Marina Vallarta" class="w-100">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1800 890">
                <text x="55" y="205" font-size="34" fill="#FFF" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    {{__('RESTAURANTES')}}
                </text>
                <text x="690" y="175" font-size="32" fill="#FFF" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    {{__('MALECÓN MARINA')}}
                </text>
                <text x="750" y="215" font-size="32" fill="#FFF" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    {{__('VALLARTA')}}
                </text>
                <text x="1265" y="205" font-size="36" fill="#FFF" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    {{__('COLEGIOS')}}
                </text>
            </svg>

        </div>
    </div>

    <img class="d-none d-lg-block position-absolute start-0 px-0 top-0" src="{{asset('img/feather.png')}}" alt="" style="width:300px; z-index: 5; transform: scaleX(-1);">
</div>

<div class="row justify-content-center mb-6 pt-5">
    <div class="col-12 col-lg-5">
        <img src="{{asset('img/airport.jpeg')}}" alt="Aeropuerto de Puerto Vallarta" class="w-100 shadow-6 rounded-2">
    </div>
    <div class="col-12 col-lg-4">
        <h3 class="text-center mb-5 mt-4 mt-lg-0">
            <span class="fs-1 text-white">{{__('Aeropuerto')}}</span> <br>
            <span class="fs-0 text-lightblue">{{__('Internacional')}}</span>
        </h3>
        <p class="text-white fs-4 fw-light ps-0 ps-lg-5">{{__('A tan solo 6 minutos en automóvil encontrarás el Aeropuerto Internacional de Puerto Vallarta.')}}</p>
    </div>
</div>

<div class="row justify-content-center mb-6 pt-5 position-relative">

    <div class="col-12 col-lg-4 order-2 order-lg-1">
        <h3 class="mb-5 text-center text-lg-start mt-4 mt-lg-0">
            <span class="fs-1 text-white" style="vertical-align: top;">{{__('La')}}</span>
            <span class="fs-0 text-lightblue">{{__('Playa')}}</span>
        </h3>
        <p class="text-white fs-4 fw-light pe-0 pe-lg-5 mb-4">{{__('A lo largo de toda la bahía encontraras una gran variedad de playas, muchas de estas a una corta distancia de Batros Marina Residences, puedes encontar la playa Krystal a unos 10 min o la playa del Holy a unos 15 min.')}}</p>
    </div>

    <div class="col-12 col-lg-5 order-1 order-lg-2">
        <img src="{{asset('img/beach-vallarta.jpg')}}" alt="Aeropuerto de Puerto Vallarta" class="w-100 shadow-6 rounded-2">
    </div>

    <img class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:70%; width:360px;">
    
</div>

{{-- Amantes del golf --}}
<div class="row justify-content-evenly mb-6 py-5">

    <div class="col-12 col-lg-4 col-xl-3 position-relative">
        <img src="{{asset('img/golf.jpg')}}" alt="Golf Marina Vallarta" class="w-100 rounded-2 shadow-6 position-relative" style="z-index:5;">
        <img width="250px" class="d-none d-lg-block position-absolute top-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 1; left:75%; transform: rotate(180deg);">
    </div>

    <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">
        <h2 class="fs-1 text-white mb-4 text-center text-lg-start mt-4 mt-lg-0">
            {{__('Para los amantes')}} <br>
            <span class="fs-0 text-lightblue">{{__('del Golf')}}</span>
        </h2>
        <p class="text-lighterblue fs-5 fw-light mb-5">{{__('Batros Marina Residences colinda con uno de los campos de golf más célebres del país: Marina Vallarta Club de Golf, un extraordinario campo de 18 hoyos diseñado por el famoso arquitecto estadounidense Joe Finger, enmarcado por abundante naturaleza, lagos y espectaculares vistas a las montañas de la sierra madre y el pacífico.')}}</p>
        <a href="{{route('inventory', request()->query() )}}" class="btn btn-blue col-12 col-lg-4">{{__('Ver Inventario')}}</a>
    </div>

</div>

@endsection