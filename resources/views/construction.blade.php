@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Avances de Obra')}}</title>
    <meta name="description" content="{{__('Aquí podrás consultar el progreso de construcción de Batros Marina Residences a través del tiempo.')}}">
@endsection

@section('content')
    
<div class="position-relative">
    <img class="w-100" src="{{asset('img/rooftop-building.jpg')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
    <div class="bg-blue-gradient"></div>

    <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
        <div class="col-12 align-self-center">
            <h1 class="fs-0 text-white text-uppercase fw-light">{{__('Construcción')}}</h1>
        </div>
    </div>

    <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
        <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
    </div>

</div>

<h2 class="my-5 text-center" id="info">
    <span class="fs-1 text-white">{{__('Avances')}}</span> <br>
    <span class="fs-0 text-lightblue">{{__('de construcción')}}</span>
</h2>

<div class="row justify-content-center mb-6">
    @foreach ($updates as $update)

        @php
            $portrait = $update->getFirstMedia('portraitc');
            $images = $update->getMedia('galleryc');
            //var_dump($images);
        @endphp

        <h3 class="fs-2 text-lightblue mb-3 text-center">{{__('Progreso de la obra')}} - {{ __(date_format($update->date, 'F')); }} {{ date_format($update->date, 'Y'); }}</h3>
        @isset($update->description)
            @if (app()->getLocale() == 'es')
                <p class="fs-5 fw-light text-center text-white">{{$update->description}}</p>
            @else
                <p class="fs-5 fw-light text-center text-white">{{$update->description_en}}</p>         
            @endif
        @endisset

        <div class="col-11 col-lg-7 text-center mb-6 px-0 position-relative">
            <img class="w-100 rounded-2 shadow-6" src="{{$portrait->getUrl('large')}}" alt="{{__('Progreso de la obra')}} - {{ date_format($update->date, 'M Y'); }}" data-fancybox="gallery-{{$update->id}}" style="height: 65vh; object-fit:cover;" loading="lazy">
            <div class="blue-bg text-center d-flex justify-content-center">
                <a href="#gallery-{{$update->id}}-1" class="btn btn-blue align-self-center px-4" style="z-index: 20;"><i class="fa-regular fa-eye"></i> {{__('Ver')}}</a>
            </div>
        </div>

        @foreach ($images as $img)
            <img src="{{$img->getUrl('large')}}" alt="{{__('Progreso de la obra')}} - {{ date_format($update->date, 'M Y'); }}" class="d-none" data-fancybox="gallery-{{$update->id}}" loading="lazy">
        @endforeach

    @endforeach
</div>

@endsection