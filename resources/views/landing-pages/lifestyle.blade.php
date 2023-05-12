<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batros Marina Residences - {{__('Preventa de condominios de lujo en Marina Vallarta')}}</title>
    <meta name="description" content="{{__('Batros Marina Residences consta de tan solo 35 condominios de lujo, con modelos de 1, 2 y 3 recámaras distribuidas en 6 niveles de departamentos y una terraza con las mejores amenidades')}}">
    @include('shared.favicon')

    <link rel="preload" href="{{asset('css/bootstrap.min.css')}}" as="style"> 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="preload" href="{{asset('css/all.min.css')}}" as="style"> 
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/batros.css')}}">
</head>
<body>

    <div class="position-relative">
        <img class="w-100" src="{{asset('img/marina-vallarta.jpg')}}" alt="Marina Vallarta" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
        <div class="bg-blue-gradient"></div>
    
        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
            <div class="col-10 col-lg-6 col-xl-3 text-center align-self-center mb-5">
                <img src="{{asset('/img/batros-logo-white-vertical.webp')}}" alt="Batros Marina Residences Logo" class="w-100">

                <a href="https://youtu.be/iMEDZ_dCHK4" data-fancybox="video-batros" class="btn btn-blue">
                    <i class="fa-solid fa-play"></i> {{__('Ver Video')}}
                </a>
            </div>
        </div>
    
        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
        </div>

        {{-- Botón de lenguaje --}}
        <div class="position-absolute top-0 end-0 m-3 m-lg-4" style="z-index: 10;">
            @if ( app()->getLocale() == 'es' )
                <a class="link-light text-decoration-none p-2 fs-5" href="{{$url = route('en.landing.lifestyle', request()->query(), true, 'en');}}">
                    <i class="fa-solid fa-globe"></i> {{__('EN')}}
                </a>
            @else
                <a class="link-light text-decoration-none p-2 fs-5" href="{{$url = route('es.landing.lifestyle', request()->query(), true, 'es');}}">
                    <i class="fa-solid fa-globe"></i> {{__('ES')}}
                </a>
            @endif
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
            <h3 class="text-center mb-4 mt-4 mt-lg-0">
                <span class="fs-1 text-white">{{__('Aeropuerto')}}</span> <br>
                <span class="fs-0 text-lightblue">{{__('Internacional')}}</span>
            </h3>
            <p class="text-white fs-4 fw-light ps-3 ps-lg-5">{{__('A tan solo 6 minutos en automóvil encontrarás el Aeropuerto Internacional de Puerto Vallarta.')}}</p>
        </div>
    </div>
    
    <div class="row justify-content-center mb-6 pt-5 position-relative">
    
        <div class="col-12 col-lg-4 order-2 order-lg-1">
            <h3 class="mb-4 text-center text-lg-start mt-4 mt-lg-0">
                <span class="fs-1 text-white" style="vertical-align: top;">{{__('La')}}</span>
                <span class="fs-0 text-lightblue">{{__('Playa')}}</span>
            </h3>
            <p class="text-white fs-4 fw-light ps-3 ps-lg-0 pe-0 pe-lg-5 mb-4">{{__('A lo largo de toda la bahía encontraras una gran variedad de playas, muchas de estas a una corta distancia de Batros Marina Residences, puedes encontar la playa Krystal a unos 10 min o la playa del Holy a unos 15 min.')}}</p>
        </div>
    
        <div class="col-12 col-lg-5 order-1 order-lg-2">
            <img src="{{asset('img/beach-vallarta.jpg')}}" alt="Aeropuerto de Puerto Vallarta" class="w-100 shadow-6 rounded-2">
        </div>
    
        <img class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:70%; width:360px;">
        
    </div>
    
    {{-- Amantes del golf --}}
    <div class="row justify-content-evenly mb-6">
    
        <div class="col-12 col-lg-4 col-xl-3 position-relative">
            <img src="{{asset('img/golf.jpg')}}" alt="Golf Marina Vallarta" class="w-100 rounded-2 shadow-6 position-relative" style="z-index:5;">
            <img width="250px" class="d-none d-lg-block position-absolute top-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 1; left:75%; transform: rotate(180deg);">
        </div>
    
        <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">
            <h2 class="fs-1 text-white mb-4 text-center text-lg-start mt-4 mt-lg-0">
                {{__('Para los amantes')}} <br>
                <span class="fs-0 text-lightblue">{{__('del Golf')}}</span>
            </h2>
            <p class="text-lighterblue fs-5 ps-2 ps-lg-0 fw-light">{{__('Batros Marina Residences colinda con uno de los campos de golf más célebres del país: Marina Vallarta Club de Golf, un extraordinario campo de 18 hoyos diseñado por el famoso arquitecto estadounidense Joe Finger, enmarcado por abundante naturaleza, lagos y espectaculares vistas a las montañas de la sierra madre y el pacífico.')}}</p>
        </div>
    
    </div>

    <div class="row justify-content-evenly mb-6">
        <div class="col-12 col-lg-4">
            <h3 class="fs-1 text-white mb-4 text-center text-lg-start mt-4 mt-lg-0">
                {{__('Marina Vallarta')}} <br>
                <span class="fs-0 text-lightblue">{{__('Farmers market')}}</span>
            </h3>
            <p class="text-lighterblue fs-5 ps-2 ps-lg-0 fw-light">
                {{__('El Farmers Market en Marina Vallarta es un evento que se lleva a cabo todos los jueves en el malecón de la marina de Puerto Vallarta. El mercado cuenta con una gran variedad de puestos de comida, una amplia selección de artesanías y recuerdos que reflejan la cultura y la creatividad de la región. El Farmers Market es un lugar ideal para pasar una tarde agradable y probar nuevos sabores, mientras se disfruta de la hermosa vista de la marina')}}
            </p>
        </div>
        
        <div class="col-12 col-lg-4 align-self-center">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fbatrosmarinaresidences%2Fvideos%2F1260858551449758%2F&show_text=false&width=560&t=0" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
    </div>



    {{-- Ir al cotizador --}}
    <div class="mb-6 text-center text-white py-5 bg-darkblue">
        <h3 class="fs-1">{{__('Deseas cotizar una Unidad?')}}</h3>
        <hr class="text-white col-10 col-lg-3 mb-2 mx-auto" style="opacity: 1; height:2px;">
        <div class="fs-5 mb-3">{{__('Visita nuestro cotizador de pagos y unidades')}}</div>
        <a href="{{route('quoter')}}" class="btn btn-blue fs-4 px-4">{{__('Visitar')}}</a>
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
                <img src="{{asset('img/century.svg')}}" alt="Century 21 Ocean Realty" class="col-10 col-lg-8 mb-4" loading="lazy">
                <div class="d-flex mt-4">
                    <i class="fa-solid fa-envelope fa-2x text-white me-3"></i>
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
    <a id="floating_whatsapp" target="_blank" rel="noopener norefferer" href="https://wa.me/52{{$phone}}?text={{__('Hola vengo del sitio web de Batros Marina Residences')}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Contactar por WhatsApp')}}" class="shadow-4 text-center m-4 position-fixed bottom-0 end-0 d-block rounded-circle whatsapp landing" style="margin-bottom:96px; z-index:100;">
        <i class="fa-brands fa-3x fa-whatsapp" style="line-height: 1.2;"></i>
    </a>

    <script defer src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script defer src="{{asset('js/fancybox.umd.js')}}"></script>
    <!-- Third party js -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-X92Y5NBQXW"></script>
    <script defer src="{{asset('js/third-party.js'); }}"></script>

</body>
</html>