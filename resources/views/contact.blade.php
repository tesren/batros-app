@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Contacto')}}</title>
    <meta name="description" content="{{__('Contacta con uno de nuestros agentes de ventas por medio de nuestro formulario de contacto, télefono, whatsapp o correo electrónico para obtener más información.')}}">
@endsection

@section('content')

<div class="position-relative">
    <img class="w-100" src="{{asset('img/rooftop.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
    <div class="bg-blue-gradient"></div>

    <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
        <div class="col-12 align-self-center">
            <h1 class="fs-0 text-white text-uppercase fw-light">{{__('Contacto')}}</h1>
        </div>
    </div>

    <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
        <a href="#contact-form" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
    </div>

</div>

@include('shared.contact-form')

@endsection