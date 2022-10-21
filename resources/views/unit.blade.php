@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Condominio')}} {{$unit->name}}</title>
    <meta name="description" content="{{__('Condominio')}} {{$unit->name}} {{__('en venta en Marina Vallarta, con')}} {{$unit->bedrooms}} {{__('Recámaras')}} & {{$unit->bathrooms}} {{__('Baños')}}. {{__('En Batros Marina Residences a un lado del campo de Golf.')}}">
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
            @if($unit->status == 'Disponible')
                <h3 class="bg-light rounded-5 d-inline px-4 fs-0 fw-light" style="color:#1D3F4F;">${{number_format($unit->price)}} {{$unit->currency}}</h3>
            @elseif ($unit->status == 'Apartada')
                <h3 class="bg-warning rounded-5 d-inline px-4 fs-0 fw-light" style="color:#1D3F4F;">{{__('Apartado')}}</h3>
            @else
                <h3 class="bg-danger rounded-5 d-inline px-4 fs-0 fw-light" style="color:#1D3F4F;">{{__('Vendido')}}</h3>
            @endif
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

    {{-- Galería --}}
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

    {{-- Ubicaciones --}}
    <div class="position-relative">
        <h4 class="mb-5 text-center text-lightblue fs-1 pt-5">{{__('Ubicación en torre y en Planta del Condominio')}}</h4>
    
        <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
    
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__('Torre')}}</button>
            </li>
    
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('Planta')}}</button>
            </li>
            
        </ul>
    
        @php
            $floor = $unit->getFirstMedia('floor');
            $view = $unit->section;
            $viewImg = $view->getFirstMedia('building_views');
        @endphp
    
        <div class="tab-content mb-6" id="pills-tabContent">
    
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">
                        <div class="svg-container">
                            <img src="{{$viewImg->getUrl()}}" alt="{{__('Condominio')}} {{$unit->name}} {{__('Ubicación en Torre')}}" class="w-100">
    
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1920 1080">
                                <polygon class="building-blue" points="{{ $unit->shape->points ?? '0,0'}}"></polygon>
    
                                <text x="{{$unit->shape->text_x ?? 0;}}" 
                                    y="{{$unit->shape->text_y ?? 0; }}"
                                    font-size="50" font-weight="bold" fill="#fff" class="fw-light">
                                    {{$unit->name}}
                                </text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">
                        <div class="svg-container">
                            <img src="{{$floor->getUrl()}}" srcset="{{$floor->getUrl('thumb')}} 320w, {{$floor->getUrl('medium')}} 800w, {{$floor->getUrl('large')}} 1200w"
                            alt="{{__('Condominio')}} {{$unit->name}} {{__('Ubicación en planta')}}" class="w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1920 1080">
                                
                                @if($unit->floor == 1)
                                    <text x="1600" y="300"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        A{{$unit->floor}}
                                    </text>
                                    <text x="950" y="300"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        B{{$unit->floor}}
                                    </text>
                                    <text x="530" y="300"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        C{{$unit->floor}}
                                    </text>
                                    <text x="530" y="750"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        D{{$unit->floor}}
                                    </text>
                                    <text x="1100" y="750"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        E{{$unit->floor}}
                                    </text>
                                @else
                                    <text x="1600" y="300"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        A{{$unit->floor}}
                                    </text>
                                    <text x="850" y="300"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        B{{$unit->floor}}
                                    </text>
                                    <text x="330" y="300"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        C{{$unit->floor}}
                                    </text>
                                    <text x="330" y="850"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        D{{$unit->floor}}
                                    </text>
                                    <text x="800" y="850"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        E{{$unit->floor}}
                                    </text>
                                    <text x="1140" y="850"
                                        font-size="80" font-weight="bold" fill="#1D3F4F" class="fw-light">
                                        F{{$unit->floor}}
                                    </text>
                                @endif
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        <img class="d-none d-lg-block position-absolute start-0 px-0" src="{{asset('img/feather.png')}}" alt="" style="top:530px; z-index: 5; transform: scaleX(-1); width:360px;">

    </div>
    


    {{-- <h4 class="mb-5 text-center text-lightblue fs-1 pt-5">{{__('Planos del Condominio')}}</h4>
    @php
        $blueprint = $unit->getFirstMedia('blueprint');
    @endphp
    <div class="row justify-content-center mb-6">
        <div class="col-12 col-lg-8 col-xl-7">

        </div>
    </div> --}}


    @if ($unit->status == 'Disponible')
        <h4 class="mb-5 text-center text-lightblue fs-1 pt-5">{{__('Planes de Pago')}}</h4>

        <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">

            @php
                $k = 1;
                $j = 1;
            @endphp

            @foreach ($unit->paymentPlans as $plan)
                <li class="nav-item" role="presentation">
                    <button class="fs-4 nav-link @if($k == 1) active me-3 @endif" id="pills-plan-nav-{{$plan->id}}" data-bs-toggle="pill" data-bs-target="#pills-plan-tab-{{$plan->id}}" type="button" role="tab" @if($k == 1)aria-selected="true" @endif>
                        {{$plan->name}}
                    </button>
                </li>
                @php $k++; @endphp
            @endforeach
        </ul>

        <div class="tab-content mb-6" id="pills-tabContent">

            @foreach ($unit->paymentPlans as $plan)
                @php
                    $enganche = ($unit->price) * ($plan->down_payment/100);
                    $meses = ($unit->price) * ($plan->months_percent/100);
                    $mes = $meses / ($plan->months_quantity);
                @endphp

                <div class="tab-pane fade @if($j == 1) show active @endif" id="pills-plan-tab-{{$plan->id}}" role="tabpanel" aria-labelledby="pills-plan-nav-{{$plan->id}}" tabindex="{{$j}}">
                    <div class="row justify-content-center">

                        <div class="col-12 col-lg-8 col-xl-5 fs-4 bg-lightblue rounded-3 text-blue fw-light px-0 shadow-6">

                            <div class="d-flex justify-content-center mb-3 mt-4 position-relative fs-1">
                                <div style="line-height: 1.3;">{{__('Tipo')}}</div>
                                <div class="text-center plan-title text-white ms-2">{{$plan->name}}</div>
                            </div>

                            <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                <div>{{__('Precio de Lista')}} </div>
                                <div class="text-end @isset($plan->discount) text-decoration-line-through @endisset">${{ number_format($unit->price, 2) }} {{$unit->currency}}</div>
                            </div>

                            @isset($plan->discount)
                                @php
                                    $discount = $unit->price * ($plan->discount/100);
                                    $final = $unit->price - $discount;
                                @endphp

                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                    <div>{{__('Descuento del')}} {{$plan->discount}}%</div>
                                    <div class="text-end">${{ number_format($discount, 2) }} {{$unit->currency}}</div>
                                </div>

                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3 bg-darkblue text-white py-2">
                                    <div>{{__('Precio Final')}} </div>
                                    <div class="text-end">${{ number_format($final, 2) }} {{$unit->currency}}</div>
                                </div>

                            @endisset

                            <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                <div>{{$plan->down_payment}}% {{__('de Enganche')}} </div>
                                <div class="text-end">${{ number_format($enganche, 2) }} {{$unit->currency}}</div>
                            </div>

                            <div class="d-flex justify-content-between mb-3 px-1 px-lg-3 fs-5">
                                <div>{{$plan->months_percent}}% {{__('en')}} {{$plan->months_quantity}} {{__('Meses')}}</div>
                                <div class="text-end fs-4">${{ number_format($meses, 2) }} {{$unit->currency}} 
                                    <div class="fs-6">${{number_format($mes,2)}} {{__('por mes')}}</div> 
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                @php $j++; @endphp
            @endforeach

        </div>

    @endif

    @include('shared.contact-form')

@endsection