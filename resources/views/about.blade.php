@extends('base')

@section('titles')
    
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
@endsection