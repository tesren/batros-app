@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Preventa de condominios de lujo en Marina Vallarta')}}</title>
    <meta name="description" content="{{__('Batros Marina Residences consta de tan solo 35 condominios de lujo, con modelos de 1, 2 y 3 recámaras distribuidas en 6 niveles de departamentos y una terraza con las mejores amenidades')}}">
@endsection

@section('content')

    <div class="position-relative">
        
        {{-- <img class="w-100" src="{{asset('img/home-landing.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; z-index:1;"> --}}


        <video id="home-video" src="{{asset('videos/batros-home.m4v')}}" poster="{{asset('img/home-landing.webp')}}" loop autoplay muted class="w-100 d-none d-lg-block" style="height: 90vh; object-fit:cover; z-index:1;"></video>

        <img src="{{asset('img/home-landing.webp')}}" alt="Batros Marina Residences" class="w-100 d-block d-lg-none" style="height: 90vh; object-fit:cover; z-index:1;">

        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100" style="z-index: 2;">
        
            <div class="col-12 col-lg-10 text-center align-self-center">
                <a href="https://youtu.be/iMEDZ_dCHK4" data-fancybox="video-batros" class="btn btn-blue">
                    <i class="fa-solid fa-play"></i> {{__('Ver Video')}}
                </a>
            </div>

        </div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-3"><i class="fa-solid fa-circle-chevron-down"></i></a>
            <h1 class="text-white fs-2 mb-5 fw-light">{{__('Continúa escribiendo tu historia en Batros Marina Residences…')}}</h1>
        </div>

        <img width="330px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:80%; transform: scaleX(-1);" loading="lazy">

        <img width="330px" class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:80%;" loading="lazy">

    </div>

    {{-- Descripción --}}
    <div class="row justify-content-center pt-5 mb-6" id="info">
        <div class="col-12 col-lg-10 col-xl-5 mb-4">

            <div id="carouselHome" class="carousel slide carousel-dark">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="{{asset('img/description-img.webp')}}" alt="Fachada de Batros Marina Residences" class="w-100 px-0 rounded-2 shadow-6" loading="lazy">
                  </div>

                  <div class="carousel-item">
                    <img src="{{ asset('img/rooftop.jpg') }}" class="w-100 px-0 rounded-2 shadow-6" alt="Rooftop de Batros Marina Residences" loading="lazy">
                  </div>

                  <div class="carousel-item">
                    <img src="{{ asset('img/rooftop-building.jpg') }}" class="w-100 px-0 rounded-2 shadow-6" alt="Rooftop de Batros Marina Residences" loading="lazy">
                  </div>

                  <div class="carousel-item">
                    <img src="{{ asset('/img/roof-jacuzzi.webp') }}" class="w-100 px-0 rounded-2 shadow-6" alt="Rooftop de Batros Marina Residences" loading="lazy">
                  </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>

        <div class="w-100"></div>

        <div class="col-12 col-lg-10 col-xl-6 text-center">
            <p class="fw-light text-lighterblue fs-5">{{__('Batros Marina Residences está inspirado en la arquitectura mexicana contemporánea. El diseño elegante y atemporal da como resultado un edificio sobrio y elegante, de colores neutrales, que se integra de manera armónica a su entorno en donde sus habitantes se sentirán realmente en casa.')}}</p>
            <a href="{{route('inventory', request()->query() )}}" class="btn btn-blue">{{__('Ver Inventario')}}</a>
        </div>

    </div>

    {{-- Amenidades --}}
    <div class="mb-6 position-relative text-center py-5">
        <h2 class="text-lightblue fs-1 text-center fw-light mb-5">{{__('Amenidades')}}</h2>

        <div class="row justify-content-center text-lightblue mb-5">
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/rooftop.webp')}}" alt="{{__('Terraza 360')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Terraza 360')}}°</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/bbq.webp')}}" alt="{{__('Asador y Bar')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Asador y Bar')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/lounge.webp')}}" alt="{{__('Mindfulness Lounge')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Mindfulness Lounge')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/gym.webp')}}" alt="{{__('Gimnasio')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Gimnasio')}}</div>
            </div>
            <div class="col-6 col-xl-2">
                <img src="{{asset('img/amenities/pool.webp')}}" alt="{{__('Alberca Sky')}}" class="col-12 col-lg-9" loading="lazy">
                <div class="fs-3 fw-light">{{__('Alberca Sky')}}</div>
            </div>
        </div>

        <img width="250px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:60%; transform: scaleX(-1);" loading="lazy">

        <a href="{{route('amenities', request()->query() )}}" class="btn btn-blue">{{__('Conocer más')}}</a>

    </div>

    {{-- Amantes del golf --}}
    <div class="row justify-content-evenly mb-6 py-5">
        <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">
            <h2 class="fs-1 text-white mb-4">
                {{__('Para los amantes')}} <br>
                <span class="fs-0 text-lightblue">{{__('del Golf')}}</span>
            </h2>
            <p class="text-lighterblue fs-5 fw-light mb-5">{{__('Batros Marina Residences colinda con uno de los campos de golf más célebres del país: Marina Vallarta Club de Golf, un extraordinario campo de 18 hoyos diseñado por el famoso arquitecto estadounidense Joe Finger, enmarcado por abundante naturaleza, lagos y espectaculares vistas a las montañas de la sierra madre y el pacífico.')}}</p>
            <a href="{{route('lifestyle', request()->query() )}}" class="btn btn-blue">{{__('Conocer más')}}</a>
        </div>

        <div class="col-12 col-lg-4 col-xl-3 position-relative">
            <img src="{{asset('img/golf.webp')}}" alt="Golf Marina Vallarta" class="w-100 rounded-2 shadow-6 position-relative" style="z-index:5;" loading="lazy">
            <img width="230px" class="d-none d-lg-block position-absolute top-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 1; left:75%; transform: rotate(180deg);" loading="lazy">
        </div>

    </div>

    {{-- Ubicación --}}
    <div class="svg-container">

        <img class="w-100" src="{{asset('img/batros-map.webp')}}" alt="Batros Marina Residences Location" loading="lazy">

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

    @php
        
        $agents = App\Models\Agent::all();
        $utm_medium = request()->query('utm_medium');
        $utm_campaign = urldecode( request()->query('utm_campaign') );

        if( $utm_medium == 'Asesores' or $utm_medium == 'Agents'){
            
            $agent = $agents->where('name', $utm_campaign)->first();
            
            if( isset($agent) ){
                $phone = $agent->phone;
                $email = $agent->email;
            }
            else{
                $phone = '3223300316';
                $email = 'info@batrosmarina.com';
            }

        }
        elseif( Cookie::get('agent') != null ){
            $agent_name = Cookie::get('agent');
            $agent = $agents->where('name', $agent_name)->first();

            if( isset($agent) ){
                $phone = $agent->phone;
                $email = $agent->email;
                $profile = $agent->getFirstMedia('profile');
            }
            else{
                $phone = '3223300316';
                $email = 'info@batrosmarina.com';
            }

        }
        else{
            $phone = '3223300316';
            $email = 'info@batrosmarina.com';
        }

    @endphp

    {{-- Modal Ultimos dias 
    <div class="modal fade" id="lastDaysModal" tabindex="-1" aria-labelledby="lastDaysModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-blue text-white">
                <div class="modal-header">
                    <div class="modal-title fs-5" id="lastDaysModalLabel">{{__('Últimos días de precios bajos')}}</div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 position-relative">
                    
                    <img src="{{asset('/img/ultimos-dias-new.webp')}}" alt="Últimos días de precios bajos" class="w-100">

                    <div class="row position-absolute top-0 start-0 h-100">

                        <div class="col-12 align-self-center text-center text-white">

                            <div class="fs-2 text-uppercase fw-bold" style="text-shadow: 2px 2px 4px #000000;">{{__('¡Últimos 2 días!')}}</div>
                            <div class="fs-5 text-uppercase" style="text-shadow: 2px 2px 4px #000000;">{{__('Precios desde')}}</div>
                            <div class="fs-1 fw-bold" style="text-shadow: 2px 2px 4px #000000;">$5,152,000 <span class="fs-6 fw-light">MXN</span></div>

                            <div class="mb-3" style="font-size:10px; text-shadow: 2px 2px 4px #000000;">{{__('Precio válido hasta el 31 de Marzo 2023')}}</div>

                            <a href="https://wa.me/52{{$phone}}?text={{__('Hola vengo del sitio web de Batros Marina Residences')}}" target="_blank" rel="noopener noreferrer" class="btn btn-blue rounded-3 fs-5 fw-bold">
                                <i class="fa-brands fa-whatsapp"></i> {{__('Conversar Ahora')}}
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>--}}


@endsection

@section('javascript')
    <script>

        // Verifica si la pantalla es menor de 768px
        if (window.matchMedia('(max-width: 768px)').matches) {
            
            // Obtiene el elemento que deseas eliminar
            var video = document.getElementById('home-video');

            // Verifica si el elemento existe antes de intentar eliminarlo
            if (video) {
                video.remove();
            }
        }

        /* document.addEventListener("DOMContentLoaded", function(event) {
            const lastDaysModal = new bootstrap.Modal('#lastDaysModal');
            lastDaysModal.show();
        }); */

    </script>
@endsection