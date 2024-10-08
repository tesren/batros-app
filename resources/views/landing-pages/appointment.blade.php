<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Agenda una cita')}} - Batros Marina Residences</title>
    <meta name="description" content="{{__('Batros Marina Residences consta de tan solo 35 condominios de lujo, con modelos de 1, 2 y 3 recámaras distribuidas en 6 niveles de departamentos y una terraza con las mejores amenidades')}}">
    @include('shared.favicon')

    <link rel="preload" href="{{asset('css/bootstrap.min.css')}}" as="style"> 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="preload" href="{{asset('css/all.min.css')}}" as="style"> 
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/batros.css')}}">
    <style>
        .glass-card{
            /* background-color: rgb(29, 63, 79, 0.4);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px); */
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body>


    <div class="position-relative">

        {{-- Botón de lenguaje --}}
        <div class="position-absolute top-0 end-0 m-3 m-lg-4" style="z-index: 10;">
            @if ( app()->getLocale() == 'es' )
                <a class="btn btn-blue text-decoration-none fs-5" href="{{$url = route('en.landing.appointment', request()->query(), true, 'en');}}">
                    <i class="fa-solid fa-globe"></i> {{__('EN')}}
                </a>
            @else
                <a class="btn btn-blue text-decoration-none fs-5" href="{{$url = route('es.landing.appointment', request()->query(), true, 'es');}}">
                    <i class="fa-solid fa-globe"></i> {{__('ES')}}
                </a>
            @endif
        </div>

        <picture>
            <source type="image/jpg" media="all and (max-width:768px)" srcset="{{ asset('/img/home-landing-mobile.webp') }}">
            <source type="image/jpg" media="all and (min-width:769px)" srcset="{{ asset('/img/home-landing.webp') }}">

            <img class="w-100" src="{{asset('/img/home-landing.webp')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; z-index:1;">
        </picture>

        {{-- <video src="{{asset('videos/batros-home.m4v')}}" poster="{{asset('img/home-landing.jpg')}}" autoplay loop muted class="w-100" style="height: 90vh; object-fit:cover; z-index:1;"></video> --}}

        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100" style="z-index: 2;">
        
            <div class="col-12 col-lg-12 col-xl-6 text-center align-self-center mb-5 text-white">
                <img src="{{asset('/img/batros-logo-white-vertical.webp')}}" alt="Batros Marina Residences Logo" class="w-50">
                <h1 class="fs-2">{{__('¡No pierda la oportunidad de vivir en un lugar hermoso y tranquilo!')}}</h1>
            </div>

        </div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center mb-4" style="z-index: 3;">
            <div class="text-white fs-4 mb-3 fw-light px-3">{{__('Complete el formulario a continuación y programe su cita.')}}</div>
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-3"><i class="fa-solid fa-circle-chevron-down"></i></a>
        </div>

        <img width="330px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:80%; transform: scaleX(-1);" loading="lazy">

        <img width="330px" class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:80%;" loading="lazy">

    </div>

    <div class="row justify-content-evenly my-6" >
        <div class="col-12 col-lg-5 mb-5">

            <div id="carouselExample" class="carousel slide">

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('/img/lifestyle-batros.jpg')}}" class="d-block w-100 rounded-2 shadow-6" alt="Batros Marina Residences" style="height:400px; object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/rooftop-building.jpg') }}" class="d-block w-100 rounded-2 shadow-6" alt="Batros Marina Residences" style="height:400px; object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/rooftop.jpg') }}" class="d-block w-100 rounded-2 shadow-6" alt="Batros Marina Residences Rooftop" style="height:400px; object-fit: cover;">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>

        </div>

        <div class="col-12 col-lg-5 col-xl-4 text-white align-self-center">
            <h2 class="mb-4">{{__('¡Bienvenido a Batros Marina Residences!')}}</h2>
            <p class="fs-5">
                {{__('Nos complace ofrecerle la oportunidad de programar una cita con uno de nuestros asesores para obtener más información sobre este desarrollo inmobiliario. Para programar una cita, simplemente complete el formulario a continuación y uno de nuestros asesores se comunicará con usted para programar la fecha y hora acordada.')}} 
            </p>
        </div>

    </div>

    <div class="position-relative mb-6" id="info">
        
        <div class="row justify-content-evenly" style="z-index: 2;">
        
            <div class="col-12 col-lg-5 text-white text-center">
                <h5 class="fs-2 fw-light">{{__('Agenda una cita')}} <br> {{__('para conocer')}} <br> <strong>Batros Marina Residences</strong></h5>
                <hr class="text-white col-10 col-lg-8 mb-4 mx-auto" style="opacity: 1; height:2px;">

                <img src="{{asset('img/batros-big-logo.webp')}}" alt="Batros Marina Residences Logo" class="col-12 col-lg-7" loading="lazy">
            </div>

            <div class="col-12 col-lg-6 col-xl-4 align-self-center mb-5">

                <div class="glass-card p-3 p-lg-4 rounded-3">

                    <div class="border-bottom text-white mb-1 fs-4">
                        {{__('Complete el formulario a continuación y programe su cita.')}}
                    </div>
                    @php
                        use Carbon\Carbon;
                        // Obtener la fecha del día de mañana
                        $tomorrow = Carbon::tomorrow();
                        $tomorrowString = $tomorrow->toDateString();
                        $today = Carbon::now();
                        // Agregar un año a la fecha de hoy
                        $oneYear = $today->addYear();
                        $oneYearString = $oneYear->toDateString();
                    @endphp

                    <form action="{{route('create.appointment')}}" method="post" class="pt-2 pt-lg-4">
                        @csrf
                        <input type="text" class="form-contact mb-3" name="name" id="name" placeholder="{{__('Nombre')}}" required maxlength="255" value="{{ old('name') }}">
                        <input type="email" class="form-contact mb-3" name="email" id="email" placeholder="{{__('Correo')}}" required maxlength="255" value="{{ old('email') }}">
                        <x-honeypot />

                        <input type="number" class="form-contact mb-3" name="phone" id="phone" placeholder="{{__('Teléfono')}}" min="0" value="{{ old('phone') }}" required>

                        <label class="text-white fw-bold">{{__('¿Cómo le gustaría ser contactado?')}}</label>
                        <div class="d-flex">
                            <div class="form-check mb-3 text-white">
                                <input class="form-check-input" type="radio" name="contact_method" id="radio_correo" value="Correo">
                                <label class="form-check-label" for="radio_correo">
                                    {{__('Correo')}}
                                </label>
                            </div>
                            <div class="form-check mb-3 text-white mx-3">
                                <input class="form-check-input" type="radio" name="contact_method" id="radio_phone" value="Teléfono">
                                <label class="form-check-label" for="radio_phone">
                                    {{__('Teléfono')}}
                                </label>
                            </div>
                            <div class="form-check mb-3 text-white">
                                <input class="form-check-input" type="radio" name="contact_method" id="radio_wp" value="WhatsApp">
                                <label class="form-check-label" for="radio_wp">
                                    {{__('WhatsApp')}}
                                </label>
                            </div>
                        </div>
                        

                        <label for="ap_date" class="text-white fw-bold">{{__('Fecha para la cita')}}</label>
                        <input type="date" class="form-contact mb-3" name="ap_date" id="ap_date" required min="{{$tomorrowString}}" max="{{$oneYearString}}">

                        <label for="ap_date" class="text-white fw-bold">{{__('Hora para la cita')}}</label>
                        <input type="time" class="form-contact mb-4" name="ap_time" id="ap_time">
                        

                        <textarea class="form-contact mb-3" name="message" id="message" cols="30" rows="3" placeholder="{{__('Comentario(opcional)')}}" maxlength="255">{{ old('message') }}</textarea>

                        <input type="hidden" name="url" value="{{url()->current()}}">
                        <input type="hidden" name="utm_campaign" value="{{ request()->query('utm_campaign') }}">

                        <div class="row justify-content-center mt-4">
                            <button type="submit" @if(session('message')) disabled @endif class="btn btn-blue col-12 col-lg-6 rounded-4 text-uppercase">{{__('Enviar')}}</button>
                        </div>
                    </form>

                    @if (session('message'))
                        <div class="my-3 text-white fs-5 fw-bold text-center">
                            <i class="fa-regular fa-circle-check"></i> {{__('Gracias, su cita fue reservada')}}
                        </div>
                    @endif
                    

                </div>
                
            </div>

        </div>

    </div>



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
    {{-- <a id="floating_whatsapp" target="_blank" rel="noopener norefferer" href="https://wa.me/52{{$phone}}?text={{__('Hola vengo del sitio web de Batros Marina Residences')}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Contactar por WhatsApp')}}" class="shadow-4 text-center m-4 position-fixed bottom-0 end-0 d-block rounded-circle whatsapp landing" style="margin-bottom:96px; z-index:100;">
        <i class="fa-brands fa-3x fa-whatsapp" style="line-height: 1.2;"></i>
    </a> --}}


    <script defer src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Third party js -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-X92Y5NBQXW"></script>
    <script defer src="{{asset('js/third-party.js'); }}"></script>

</body>
</html>