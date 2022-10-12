@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Contacto')}}</title>
    <meta name="description" content="{{__('Contacta con uno de nuestros agentes de ventas por medio de nuestro formulario de contacto, télefono, whatsapp o correo electrónico para obtener más información.')}}">
@endsection

@section('content')

<div class="position-relative">
    <img class="w-100" src="{{asset('img/home-landing.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; z-index:1;">
    <div class="bg-blue-gradient"></div>

    <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
        <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-3"><i class="fa-solid fa-circle-chevron-down"></i></a>
    </div>

</div>

@include('shared.contact-form')

@endsection