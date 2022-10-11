@extends('base')

@section('titles')
    <title>Batros Marina Residences - </title>
    <meta name="description" content="Departamentos">
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

    <div class="row justify-content-center mt-5 mb-6">
        <div class="col-12 col-lg-10 col-xl-5 mb-4">
            <img src="{{asset('img/description-img.jpg')}}" alt="Batros Marina Residences" class="w-100 px-0 rounded-2 shadow-6">
        </div>

        <div class="w-100"></div>

        <div class="col-12 col-lg-10 col-xl-6 text-center">
            <p class="fw-light text-lighterblue fs-5">{{__('Batros Marina Residences está inspirado en la arquitectura mexicana contemporánea. El diseño elegante y atemporal da como resultado un edificio sobrio y elegante, de colores neutrales, que se integra de manera armónica a su entorno en donde sus habitantes se sentirán realmente en casa.')}}</p>
            <a href="#" class="btn btn-blue">{{__('Ver Inventario')}}</a>
        </div>

    </div>

    <div class="mb-6 position-relative text-center py-5">
        <h2 class="text-lightblue fs-1 text-center fw-light mb-5">{{_('Amenidades')}}</h2>

        <div class="row justify-content-center text-lightblue mb-5">
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/rooftop.png')}}" alt="{{__('Rooftop 360')}}" class="col-12 col-lg-9">
                <div class="fs-3 fw-light">{{__('Terraza 360°')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/bbq.png')}}" alt="{{__('Asador & Bar')}}" class="col-12 col-lg-9">
                <div class="fs-3 fw-light">{{__('Asador & Bar')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/lounge.png')}}" alt="{{__('Mindfulness Lounge')}}" class="col-12 col-lg-9">
                <div class="fs-3 fw-light">{{__('Mindfulness Lounge')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/gym.png')}}" alt="{{__('Gimnasio')}}" class="col-12 col-lg-9">
                <div class="fs-3 fw-light">{{__('Gimnasio')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/pool.png')}}" alt="{{__('Alberca Sky')}}" class="col-12 col-lg-9">
                <div class="fs-3 fw-light">{{__('Alberca Sky')}}</div>
            </div>
        </div>

        <img width="250px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:60%; transform: scaleX(-1);">

        <a href="#" class="btn btn-blue">{{__('Conocer más')}}</a>

    </div>

    <div class="row justify-content-evenly mb-6 py-5">
        <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">
            <h2 class="fs-1 text-white mb-4">
                {{__('Para los amantes')}} <br>
                <span class="fs-0 text-lightblue">{{__('del Golf')}}</span>
            </h2>
            <p class="text-lighterblue fs-5 fw-light mb-5">{{__('Batros Marina Residences colinda con uno de los campos de golf más célebres del país: Marina Vallarta Club de Golf, un extraordinario campo de 18 hoyos diseñado por el famoso arquitecto estadounidense Joe Finger, enmarcado por abundante naturaleza, lagos y espectaculares vistas a las montañas de la sierra madre y el pacífico.')}}</p>
            <a href="#" class="btn btn-blue">{{__('Conocer más')}}</a>
        </div>

        <div class="col-12 col-lg-4 col-xl-3 position-relative">
            <img src="{{asset('img/golf.jpg')}}" alt="Golf Marina Vallarta" class="w-100 rounded-2 shadow-6 position-relative" style="z-index:5;">
            <img width="250px" class="d-none d-lg-block position-absolute top-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 1; left:75%; transform: rotate(180deg);">
        </div>

    </div>

    @include('shared.contact-form')


@endsection