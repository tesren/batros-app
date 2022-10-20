@extends('base')

@section('titles')
    <title>Error 404</title>
@endsection

@section('content')
<div class="text-center" style="min-height: 60vh;">
    <h1 class="mt-5 mb-4 text-lightblue">Error 404</h1>
    <p class="fs-5 mb-4 text-white">{{__('Lo sentimos, la página que buscas no existe')}}</p>
    <a class="btn btn-blue mb-6" href="{{route('home')}}">{{__('Volver a Inicio')}}</a>
</div>
@endsection