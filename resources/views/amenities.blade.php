@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Amenidades')}}</title>
    <meta name="description" content="{{__('Batros Marina Residences cuenta con una variedad de amenidades y de espacios para tu entrenimiento y relajación')}}">
@endsection

@section('content')
    <div class="position-relative">
        <img class="w-100" src="{{asset('img/rooftop.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
            <div class="col-12 align-self-center">
                <h1 class="fs-0 text-white text-uppercase fw-light">{{__('Amenidades')}}</h1>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
        </div>

        <img width="330px" class="d-none d-lg-block position-absolute start-0 top-100" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; transform: scaleX(-1);">

    </div>

    <h2 class="text-center my-5 fw-light" id="info">
        <span class="text-white fs-1">{{__('Descubre por qué')}}</span> <br>
        <span class="text-lightblue fs-0">Batros Marina Residences</span> <br>
        <span class="text-white fs-1">{{__('es tu mejor opción')}}</span>
    </h2>

    <div class="row justify-content-center mb-6">
        <div class="col-12 col-lg-7">
            <img src="{{asset('img/amenities/gym-photo.jpeg')}}" alt="Gym en Batros Marina Residences" class="w-100 rounded-2 shadow-6">
            <p class="fs-5 mt-3 text-white fw-light">{{__('Batros Marina Residences cuenta con una variedad de espacios para tu entretenimiento y relajación.')}}</p>
        </div>

        <div class="w-100 mb-5"></div>

        <div class="col-6 col-lg-2 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/amenities/valet-parking.png')}}" alt="Valet Parking" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">Valet Parking</h3>
        </div>
        <div class="col-6 col-lg-2 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/amenities/lobby.png')}}" alt="Lobby" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">Lobby</h3>
        </div>
        <div class="col-6 col-lg-2 text-center">
            <img src="{{asset('img/amenities/security.png')}}" alt="Vigilancia" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">{{__('Vigilancia')}}</h3>
        </div>
        <div class="col-6 col-lg-2 text-center">
            <img src="{{asset('img/amenities/parking.png')}}" alt="{{__('Estacionamiento Subterraneo')}}" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">{{__('Estacionamiento Subterraneo')}}</h3>
        </div>

    </div>

    <div class="row justify-content-center mb-6 position-relative">
        <div class="col-12 col-lg-7">
            <div class="svg-container">
                <img src="{{asset('img/amenities/amenities-1.jpg')}}" alt="Rooftop & Bbq" class="w-100 rounded-3">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1280 724">
                    <text x="80" y="190" font-size="44" fill="#fff">
                        {{__('ROOFTOP')}}
                    </text>
                    <text x="950" y="510" font-size="44" fill="#fff">
                        {{__('ÁREA BBQ')}}
                    </text>
                </svg>
            </div>
        </div>

        <div class="w-100 mb-5"></div>

        <div class="col-6 col-lg-2 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/amenities/pool.png')}}" alt="Valet Parking" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">{{__('Alberca')}}</h3>
        </div>
        <div class="col-6 col-lg-2 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/amenities/gym.png')}}" alt="Lobby" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">{{__('Gimnasio')}}</h3>
        </div>
        <div class="col-6 col-lg-2 text-center">
            <img src="{{asset('img/amenities/elevator.png')}}" alt="Vigilancia" class="col-12 col-lg-6">
            <h3 class="text-lightblue fs-4 fw-light">{{__('Elevadores')}}</h3>
        </div>

        <div class="col-12 col-lg-7 mt-5">
            <div class="svg-container">
                <img src="{{asset('img/amenities/amenities-2.jpg')}}" alt="Rooftop & Bbq" class="w-100 rounded-3">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1280 724">
                    <text x="960" y="190" font-size="44" fill="#fff">
                        {{__('JACUZZI')}}
                    </text>
                    <text x="40" y="525" font-size="44" fill="#fff">
                        {{__('MINDFULNESS')}}
                    </text>
                    <text x="110" y="570" font-size="44" fill="#fff">
                        {{__('LOUNGE')}}
                    </text>
                </svg>
            </div>
        </div>

        <img class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:89%; width:380px;">

    </div>

@endsection