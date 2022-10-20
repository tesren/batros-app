@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Búsqueda de Condominios')}}</title>
    <meta name="description" content="{{__('Encuentra tu departamento ideal que se adapte a tus gustos y necesidades dentro de Batros Marina Residences.')}}">
@endsection

@section('content')

@if (count($units)>0)
    <h1 class="text-center fs-0 my-5 text-lightblue">{{__('Resultados')}}</h1>

    <div class="row mb-5 text-white justify-content-center">

        @foreach ($units as $unit)

            @php
                $portrait = $unit->getFirstMedia('portrait');
                if(isset($portrait)){
                $portrait = $portrait->getUrl('medium');
                }else{
                    $portrait = asset('img/contact-landing.jpg');
                }
            @endphp

            <div class="col-12 col-lg-3 mx-1 mb-4">
                <div class="card w-100">

                    <img src="{{$portrait}}" alt="{{__('Unidad')}} {{$unit->name}}" class="card-img-top w-100">

                    <div class="card-body">
                        <h3 class="card-title fs-2">{{__('Unidad')}} {{$unit->name}}</h3>
                
                        <div class="card-text mb-3 fs-5 fw-light">
                            <i class="fa-solid fa-bed"></i> {{$unit->bedrooms}}
                            <i class="ms-3 fa-solid fa-shower"></i> {{$unit->bathrooms}} 
                            <i class="ms-3 fa-solid fa-ruler-combined"></i> {{$unit->area}} m²
                        </div>

                        <a href="{{route('unit', ['id' => $unit->id])}}" class="btn btn-blue w-100">{{__('Ver más')}}</a>
                    </div>
                </div>
            </div>
            
        @endforeach

    </div>

    <div class="text-center mb-6">
        {{$units->links();}}
    </div>
@else
    <h1 class="text-center mt-5 mb-0 text-lightblue">{{__('Lo sentimos, no hay Resultados')}}</h1>
    <p class="text-white text-center fw-light fs-5 mb-3">{{__('Puedes hacer tu busqueda de nuevo, o ver estas unidades que podrían interesarte')}}</p>
    <div class="text-center mb-5">
        <button type="button" class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#searchModal">
            <i class="fa-solid fa-magnifying-glass"></i> {{__('Buscar de nuevo')}}
        </button>
    </div>

    <div class="row mb-5 text-white justify-content-center">

        @foreach ($allUnits as $unit)

            @php
                $portrait = $unit->getFirstMedia('portrait');
                if(isset($portrait)){
                $portrait = $portrait->getUrl('medium');
                }else{
                    $portrait = asset('img/contact-landing.jpg');
                }
            @endphp

            <div class="col-12 col-lg-3 mx-1 mb-4">
                <div class="card w-100">

                    <img src="{{$portrait}}" alt="{{__('Unidad')}} {{$unit->name}}" class="card-img-top w-100">

                    <div class="card-body">
                        <h3 class="card-title fs-2">{{__('Unidad')}} {{$unit->name}}</h3>
                
                        <div class="card-text mb-3 fs-5 fw-light">
                            <i class="fa-solid fa-bed"></i> {{$unit->bedrooms}}
                            <i class="ms-3 fa-solid fa-shower"></i> {{$unit->bathrooms}} 
                            <i class="ms-3 fa-solid fa-ruler-combined"></i> {{$unit->area}} m²
                        </div>

                        <a href="{{route('unit', ['id' => $unit->id])}}" class="btn btn-blue w-100">{{__('Ver más')}}</a>
                    </div>
                </div>
            </div>
            
        @endforeach

    </div>

@endif


@endsection