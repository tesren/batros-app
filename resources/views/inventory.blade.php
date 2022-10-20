@extends('base')

@section('titles')
    <title>Batros Marina Residences - {{__('Inventario de Condominios en venta')}}</title>
    <meta name="description" content="{{__('Haz clic en cualquiera de nuestros condominios en venta disponibles para ver mas detalles y escoge el más adecuado a tus gustos y necesidades')}}">
@endsection

@section('content')
    <div class="text-center position-relative">
        <h1 class="text-lightblue mt-5 mb-0">{{__('Ve nuestras unidades diponibles')}}</h1>
        <h2 class="text-white mb-5 fs-4 fw-light">{{__('Selecciona un condominio para más detalles')}}</h2>

        <img width="330px" class="d-none d-lg-block position-absolute top-0 end-0" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5;">
    </div>

    {{-- Menú de navegación --}}
    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
        @php $i = 1; @endphp
        @foreach ($sections as $section)
            <li class="nav-item" role="presentation">
                <button class="nav-link @if($i == 1) active @endif" id="pills-{{$section->id}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$section->id}}" type="button" role="tab" aria-controls="pills-{{$section->id}}" @if($i == 1) aria-selected="true" @endif>
                    @if (app()->getlocale() == 'es')
                        {{$section->name_es}}
                    @else
                        {{$section->name_en}}
                    @endif
                </button>
            </li>
            @php $i++; @endphp
        @endforeach
    </ul>
    
    <div class="row justify-content-evenly">

        {{-- Vistas --}}
        <div class="col-12 col-lg-8">
            <div class="tab-content mb-6" id="pills-tabContent">
                @php $j = 1; @endphp
                @foreach ($sections as $section)
        
                    @php
                        $media = $section->getFirstMedia('building_views');
                    @endphp
        
                    <div class="tab-pane fade @if($j == 1) show active @endif" id="pills-{{$section->id}}" role="tabpanel" aria-labelledby="pills-{{$section->id}}-tab" tabindex="{{$j}}">
                        
                        <div class="svg-container">

                            <img src="{{$media->getUrl();}}" alt="{{$section->name_es}}" class="w-100 rounded-3">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-content" viewBox="0 0 1920 1080">
                                @foreach ($section->units as $unit )

                                    <a href="{{route('unit', ['id'=>$unit->id])}}" class="text-decoration-none position-relative">
                                        
                                        <polygon class="building-{{strtolower($unit->status)}}" points="{{ $unit->shape->points ?? '0,0'}}"></polygon>

                                        <text x="{{$unit->shape->text_x ?? 0;}}" 
                                            y="{{$unit->shape->text_y ?? 0; }}"
                                            font-size="50" font-weight="bold" fill="#fff" class="fw-light">
                                            {{$unit->name}}
                                        </text>
                                        
                                    </a>
                                @endforeach
                            </svg>

                        </div>

                    </div>
        
                    @php $j++; @endphp
                @endforeach
            </div>
        </div>

        {{-- Simbología --}}
        <div class="col-12 col-lg-2 text-center fs-4 align-self-center">
            <div class="row justify-content-evenly">
                <div class="badge bg-success d-block mb-5 col-3 col-lg-7 mx-auto fw-light">{{__('Disponible')}}</div>
                <div class="badge bg-warning d-block mb-5 col-3 col-lg-7 mx-auto fw-light">{{__('Apartado')}}</div>
                <div class="badge bg-danger d-block mb-5 col-3 col-lg-7 mx-auto fw-light">{{__('Vendido')}}</div>
            </div>
        </div>

    </div>

    

@endsection