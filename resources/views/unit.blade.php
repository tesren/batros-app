@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Condominio')}} {{$unit->name}}</title>
    <meta name="description" content="{{__('Condominio')}} {{$unit->name}} {{__('en venta en Marina Vallarta, con')}} {{$unit->bedrooms}} {{__('Recámaras')}} & {{$unit->bathrooms}} {{__('Baños')}}. {{__('en Batros Marina Residences a un lado del campo de Golf.')}}">
@endsection

@section('content')
    @php
        $portrait = $unit->getFirstMedia('portrait');
        $isometric = $unit->getFirstMedia('isometric');
    @endphp

    <div class="position-relative">

        <img src="{{$portrait->getUrl()}}" srcset="{{$portrait->getUrl('thumb')}} 320w, {{$portrait->getUrl('medium')}} 800w, {{$portrait->getUrl('large')}} 1200w"
        alt="Batros Marina Residences {{__('Condominio')}} {{$unit->name}}" class="w-100" style="height: 90vh; object-fit:cover; object-position:top; z-index:1;">
        
        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100 text-center" style="z-index: 3;">
            <div class="col-12 align-self-center">
                <h1 class="fs-0 text-white text-uppercase fw-light">{{__('Condominio')}} {{$unit->name}}</h1>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-5"><i class="fa-solid fa-circle-chevron-down"></i></a>
        </div>

        <img width="330px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:80%; transform: scaleX(-1);">

    </div>

    <div class="row justify-content-center pt-5 mb-6 position-relative" id="info">
        <div class="col-12 col-lg-5 align-self-center">
            <h2 class="text-white fs-0"><span class="text-lightblue">{{__('Condominio')}}</span> {{$unit->name}}</h2>
            <h2 class="text-lightblue fs-1 fw-light mb-4">{{__('Area total')}}: {{$unit->area}}m²</h2>
            <h3 class="bg-light rounded-5 d-inline px-4 fs-0 fw-light" style="color:#1D3F4F;">${{number_format($unit->price)}} {{$unit->currency}}</h3>
        </div>
        
        <div class="col-12 col-lg-5">
            <img src="{{$isometric->getUrl()}}" srcset="{{$isometric->getUrl('thumb')}} 320w, {{$isometric->getUrl('medium')}} 800w, {{$isometric->getUrl('large')}} 1200w"
            alt="{{__('Condominio')}} {{$unit->name}} {{__('Isométrico')}}" class="w-100">
        </div>

        <img class="d-none d-lg-block position-absolute end-0 px-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:80%; width:330px;">
    </div>


    <h3 class="mb-5 text-center text-lightblue fs-1">{{__('Detalles')}}</h3>
    <div class="row mb-6 position-relative">
        <div class="col-6 col-lg-3 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/bed.png')}}" alt="" class="img-fluid">
            <div class="fs-2 fw-light mt-4 text-white">{{$unit->bedrooms}} {{__('Recámaras')}}</div>
        </div>
        <div class="col-6 col-lg-3 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/bath.png')}}" alt="" class="img-fluid">
            <div class="fs-2 fw-light mt-4 text-white">{{$unit->bathrooms}} {{__('Baños')}}</div>
        </div>
        <div class="col-6 col-lg-3 text-center">
            <img src="{{asset('img/balcony.png')}}" alt="" class="img-fluid">
            <div class="fs-2 fw-light mt-4 text-white">{{__('Balcón')}}</div>
        </div>
        <div class="col-6 col-lg-3 text-center">
            <img src="{{asset('img/level.png')}}" alt="" class="img-fluid">
            <div class="fs-2 fw-light mt-4 text-white">{{__('Nivel')}} {{$unit->floor}}</div>
        </div>

        <img class="d-none d-lg-block position-absolute start-0 top-100 px-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; transform: scaleX(-1); width:330px;">

    </div>

    <h3 class="mb-5 text-center text-lightblue fs-1 pt-5">{{__('Galería')}}</h3>

    <div class="row justify-content-center mb-6 position-relative">
        <div class="col-12 col-lg-8 px-0">
            <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                @php
                    $galleryImgs = $unit->getMedia('gallery');
                    $i = 1;
                @endphp
        
                <div class="carousel-inner">
                    @foreach ($galleryImgs as $img)
                        <div class="carousel-item @if($i == 1)active @endif">
                            <img src="{{$img->getUrl();}}" class="d-block w-100 rounded-2" alt="{{__('Condominio')}} {{$unit->name}} {{__('Interiores')}}">
                        </div>
                      @php $i++; @endphp
                    @endforeach
                </div>
        
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
        
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        
            </div>
        </div>

        <img class="d-none d-lg-block position-absolute end-0 px-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5; top:80%; width:330px;">

    </div>

    <h4 class="mb-5 text-center text-lightblue fs-1 pt-5">{{__('Ubicación en torre y en Planta del Condominio')}}</h4>
    
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__('Torre')}}</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('Planta')}}</button>
        </li>
        
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
    </div>

@endsection