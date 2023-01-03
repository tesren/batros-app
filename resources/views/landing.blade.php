<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batros Marina Residences - {{__('Preventa de condominios de lujo en Marina Vallarta')}}</title>
    <meta name="description" content="{{__('Batros Marina Residences consta de tan solo 35 condominios de lujo, con modelos de 1, 2 y 3 recámaras distribuidas en 6 niveles de departamentos y una terraza con las mejores amenidades')}}">
    @include('shared.favicon')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/batros.css')}}">
</head>
<body>


    <div class="position-relative">
        
        {{-- <img class="w-100" src="{{asset('img/home-landing.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; z-index:1;"> --}}


        <video src="{{asset('videos/batros-home.m4v')}}" poster="{{asset('img/home-landing.jpg')}}" autoplay loop muted class="w-100" style="height: 90vh; object-fit:cover; z-index:1;"></video>

        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100" style="z-index: 2;">
        
            <div class="col-10 col-lg-6 col-xl-3 text-center align-self-center mb-5">
                <img src="{{asset('/img/batros-logo-white-vertical.png')}}" alt="Batros Marina Residences Logo" class="w-100">

                <a href="https://youtu.be/iMEDZ_dCHK4" data-fancybox="video-batros" class="btn btn-blue">
                    <i class="fa-solid fa-play"></i> {{__('Ver Video')}}
                </a>
            </div>

        </div>

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
            <a href="#contact-form" class="btn btn-blue">{{__('Más información')}}</a>
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

    </div>

    {{-- Amantes del golf --}}
    <div class="row justify-content-evenly mb-6 py-5">
        <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">
            <h2 class="fs-1 text-white mb-4">
                {{__('Para los amantes')}} <br>
                <span class="fs-0 text-lightblue">{{__('del Golf')}}</span>
            </h2>
            <p class="text-lighterblue fs-5 fw-light mb-5">{{__('Batros Marina Residences colinda con uno de los campos de golf más célebres del país: Marina Vallarta Club de Golf, un extraordinario campo de 18 hoyos diseñado por el famoso arquitecto estadounidense Joe Finger, enmarcado por abundante naturaleza, lagos y espectaculares vistas a las montañas de la sierra madre y el pacífico.')}}</p>
            <a href="#contact-form" class="btn btn-blue">{{__('Conocer más')}}</a>
        </div>

        <div class="col-12 col-lg-4 col-xl-3 position-relative">
            <img src="{{asset('img/golf.jpg')}}" alt="Golf Marina Vallarta" class="w-100 rounded-2 shadow-6 position-relative" style="z-index:5;" loading="lazy">
            <img width="230px" class="d-none d-lg-block position-absolute top-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 1; left:75%; transform: rotate(180deg);" loading="lazy">
        </div>

    </div>

    {{-- Ubicación --}}
    <div class="svg-container d-none d-lg-block">

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

    <div class="d-block d-lg-none text-center">
        <h3 class="fs-1 text-lightblue mb-4">{{__('Ubicación')}}</h3>
        <img src="{{ asset('/img/mapa-esp.jpg') }}" alt="Batros Location" class="w-100">
    </div>


    @include('shared.contact-form')


    <footer>

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
    
        <div class="row justify-content-evenly mb-5">
    
            <div class="col-12 col-lg-4">
                <img src="{{asset('img/century.svg')}}" alt="Century 21 Ocean Realty" class="col-10 col-lg-8 mb-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-solid fa-3x text-white fa-phone"></i>
                    </div>
                    <div>
                        <a id="phone_footer" class="link-light d-block text-decoration-none fs-5" href="tel:+52{{$phone}}">+52 {{$phone}}</a>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <i class="fa-solid fa-envelope fa-3x text-white me-3"></i>
                    <a id="mail_footer" href="mailto:{{$email}}" class="link-light d-block align-self-center text-decoration-none">{{$email}}</a>
                </div>
            </div>
    
            <div class="col-12 col-lg-4 text-white">
                <h6 class="fs-5 mt-3">{{__('Oficina en Olas Altas')}}</h6>
                <address class="fw-light">{{__('Calle Rodolfo Gómez 118, Zona Romántica, 48399, Puerto Vallarta, Jal.')}}</address>
    
                <h6 class="fs-5">{{__('Oficina en Marina Vallarta')}}</h6>
                <address class="fw-light">{{__('Calle Popa 112 L. 1B, Marina Vallarta, 48335, Puerto Vallarta, Jal.')}}</address>
            </div>
    
            <div class="col-12 col-lg-3 align-self-center text-center text-lg-start">
                <a href="https://www.instagram.com/batrosmarinaresidences/" target="_blank" rel="noopener noreferrer" class="link-light text-decoration-none">
                    <i class="fa-brands fa-3x fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/batrosmarinaresidences" target="_blank" rel="noopener noreferrer" class="link-light text-decoration-none ms-4">
                    <i class="fa-brands fa-3x fa-facebook"></i>
                </a>
            </div>
    
        </div>
    
        <div class="bg-darkblue text-center text-white py-3">
            <a href="{{route('privacy.policy')}}" class="link-light me-4">{{__('Políticas de Privacidad')}}</a>
            <span>Batros Marina Residences © {{date('Y')}}</span>
        </div>
    </footer>

    {{-- Whatsapp Button --}}
    <a id="floating_whatsapp" target="_blank" rel="noopener norefferer" href="https://wa.me/52{{$phone}}?text={{__('Hola vengo del sitio web de Batros Marina Residences')}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Contactar por WhatsApp')}}" class="shadow-4 text-center m-4 position-fixed bottom-0 end-0 d-block rounded-circle whatsapp landing" style="margin-bottom:96px;">
        <i class="fa-brands fa-3x fa-whatsapp" style="line-height: 1.2;"></i>
    </a>
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/fancybox.umd.js')}}"></script>

    <script>
        const wp_button = document.getElementById('floating_whatsapp');
        const wp_tooltip = new bootstrap.Tooltip(wp_button);

        window.addEventListener("load", (event) => {
            //console.log("page is fully loaded");
            wp_tooltip.show();
        });
    </script>

</body>
</html>