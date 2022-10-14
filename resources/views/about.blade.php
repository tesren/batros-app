@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Sobre Nostros')}}</title>
    <meta name="description" content="{{__('Con 22 años de trayectoria construyendo en Guadalajara y Puerto Vallarta. Desde nuestro primer día de trabajo a la fecha, hemos realizado más de 21 desarrollos, 527 viviendas, 8,755 M2 de Espacios Comerciales; Cinco Estaciones de Servicio (Gasolineras). Todo esto respetando nuestros valores y cumpliendo con las expectativas de nuestros clientes.')}}">
@endsection

@section('content')
    <div class="position-relative">
        <img class="w-100" src="{{asset('img/marina-vallarta.jpg')}}" alt="Marina Vallarta" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
            <div class="col-12 align-self-center">
                <h1 class="fs-0 text-white text-uppercase fw-light">{{__('Nosotros')}}</h1>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
        </div>

    </div>

    <div class="text-center position-relative pt-5 mb-6" id="info">
        <h2 style="line-height: 0.8;">
            <span class="fs-1 text-white me-5">{{__('Nuestro')}}</span> <br>
            <span class="fs-0 text-lightblue ms-5">{{__('desarrollador')}}</span>
        </h2>

        <img width="330px" class="d-none d-lg-block position-absolute start-0 top-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; transform: scaleX(-1);">

    </div>

    <div class="row justify-content-center mb-6">

        <div class="col-8 col-lg-2 mb-5">
            <img class="w-100" src="{{asset('img/vagual-logo.png')}}" alt="Desarrollador Vagual">
        </div>

        <div class="w-100"></div>
        <div class="col-12 col-lg-8">
            <p class="fs-5 fw-light text-white">{{__('Tiene más de 22 años de trayectoria construyendo en Guadalajara y Puerto Vallarta. Desde nuestro primer día de trabajo a la fecha, hemos realizado más de 21 desarrollos, 527 viviendas, 8,755 M2 de Espacios Comerciales; Cinco Estaciones de Servicio (Gasolineras). Todo esto respetando nuestros valores y cumpliendo con las expectativas de nuestros clientes. Estamos comprometidos a largo plazo, contamos con mas de 7,000 m2 de reserva territorial para los siguientes desarrollos.')}}</p>
        </div>

    </div>

    <div class="row justify-content-center text-center mb-6">

        <div class="col-11 col-lg-3 d-block d-lg-flex mb-5">
            <div>
                <h3 class="text-lightblue fs-2">2000</h3>
                <p class="text-white fs-5">{{__('Condominio “Corazón del Fresno” Guadalajara Jal.')}}</p>
            </div>
            
            <div class="fs-3 align-self-center"><img class="mx-3 d-none d-lg-flex" width="100px" src="{{asset('img/dots.png')}}" alt=""></div>

            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>
            
        </div>

        <div class="col-11 col-lg-3 d-block d-lg-flex mb-5">
            <div>
                <h3 class="text-lightblue fs-2">2001</h3>
                <p class="text-white fs-5">{{__('Condominio “San Ángel” Guadalajara Jal.')}}</p>
            </div>
            
            <div class="fs-3 align-self-center"><img class="mx-3 d-none d-lg-flex" width="100px" src="{{asset('img/dots.png')}}" alt=""></div>
            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>
            
        </div>

        <div class="col-11 col-lg-3 d-block d-lg-flex mb-5">
            <div>
                <h3 class="text-lightblue fs-2">2002 - 2003</h3>
                <p class="text-white fs-5">{{__('Condominio “Pueblo Bonito” Zapopan Jal.')}}</p>
            </div>
            
            <div class="fs-3 align-self-center"><img class="mx-3 d-none d-lg-flex" width="100px" src="{{asset('img/dots.png')}}" alt=""></div>
            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>
            
        </div>

        <div class="col-11 col-lg-2 mb-0 mb-lg-5 position-relative">
            <h3 class="text-lightblue fs-2">2005</h3>
            <p class="text-white fs-5">{{__('Plaza Comercial “Marina Vallarta” Puerto Vallarta Jal.')}}</p>
            
            <img class="d-none d-lg-block position-absolute top-100 start-50" height="100px" src="{{asset('img/dots-vertical.png')}}" alt="">
            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>

        </div>

    </div>

    <div class="row justify-content-center text-center mb-6 position-relative">

        <div class="col-11 col-lg-3 d-block d-lg-flex mb-5 order-4 order-lg-1">
            <div>
                <h3 class="text-lightblue fs-2">2011 - 2012</h3>
                <p class="text-white fs-5">{{__('Plaza Comercial “Quinta Avenida” Zapopan Jal.')}}</p>
            </div>
            
            <div class="fs-3 align-self-center"><img class="mx-3 d-none d-lg-flex" width="100px" style="transform: scaleX(-1);" src="{{asset('img/dots.png')}}" alt=""></div>
            
        </div>

        <div class="col-11 col-lg-3 d-block d-lg-flex mb-5 order-3 order-lg-2">
            <div>
                <h3 class="text-lightblue fs-2">2009</h3>
                <p class="text-white fs-5">{{__('Condominio vertical “Galileo Galilei” Tonalá Jal.')}}</p>
            </div>
            
            <div class="fs-3 align-self-center"><img class="mx-3 d-none d-lg-flex" width="100px" style="transform: scaleX(-1);" src="{{asset('img/dots.png')}}" alt=""></div>
            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>
            
        </div>

        <div class="col-11 col-lg-3 d-block d-lg-flex mb-5 order-2 order-lg-3">
            <div>
                <h3 class="text-lightblue fs-2">2007 - 2008</h3>
                <p class="text-white fs-5">{{__('Condominio “El Sausalito” Zapopan Jal.')}}</p>
            </div>
            
            <div class="fs-3 align-self-center"><img class="mx-3 d-none d-lg-flex" width="100px" style="transform: scaleX(-1);" src="{{asset('img/dots.png')}}" alt=""></div>
            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>
            
        </div>

        <div class="col-11 col-lg-2 d-block d-lg-flex mb-5 order-1 order-lg-4">
            <div>
                <h3 class="text-lightblue fs-2">2006</h3>
                <p class="text-white fs-5">{{__('Condominio “Laurel de la India” Zapopan Jal.')}}</p>
            </div>

            <div class="fs-3 align-self-center"><img class="d-block d-lg-none mx-auto" height="100px" src="{{asset('img/dots-vertical.png')}}" alt=""></div>
        </div>

        <img class="d-none d-lg-block position-absolute end-0 px-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:55%; width:330px;">

    </div>

@endsection