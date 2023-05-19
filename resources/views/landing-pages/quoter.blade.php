<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Cotizador')}} - Batros Marina Residences</title>
    <meta name="description" content="{{__('Batros Marina Residences consta de tan solo 35 condominios de lujo, con modelos de 1, 2 y 3 recámaras distribuidas en 6 niveles de departamentos y una terraza con las mejores amenidades')}}">
    @include('shared.favicon')

    <link rel="preload" href="{{asset('css/bootstrap.min.css')}}" as="style"> 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="preload" href="{{asset('css/all.min.css')}}" as="style"> 
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/batros.css')}}">
</head>
<body>


    <div class="position-relative">

        {{-- Botón de lenguaje --}}
        <div class="position-absolute top-0 end-0 m-3 m-lg-4" style="z-index: 10;">
            @if ( app()->getLocale() == 'es' )
                <a class="btn btn-blue text-decoration-none fs-5" href="{{$url = route('en.quoter', request()->query(), true, 'en');}}">
                    <i class="fa-solid fa-globe"></i> {{__('EN')}}
                </a>
            @else
                <a class="btn btn-blue text-decoration-none fs-5" href="{{$url = route('es.quoter', request()->query(), true, 'es');}}">
                    <i class="fa-solid fa-globe"></i> {{__('ES')}}
                </a>
            @endif
        </div>

        <picture>
            <source type="image/jpg" media="all and (max-width:768px)" srcset="{{ asset('/img/home-landing-mobile.webp') }}">
            <source type="image/jpg" media="all and (min-width:769px)" srcset="{{ asset('/img/home-landing.webp') }}">

            <img class="w-100" src="{{asset('/img/home-landing.webp')}}" alt="Batros Marina Residences" style="height: 90vh; object-fit:cover; z-index:1;">
        </picture>

        {{-- <video src="{{asset('videos/batros-home.m4v')}}" poster="{{asset('img/home-landing.jpg')}}" autoplay loop muted class="w-100" style="height: 90vh; object-fit:cover; z-index:1;"></video> --}}

        <div class="bg-blue-gradient"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100" style="z-index: 2;">
        
            <div class="col-10 col-lg-6 col-xl-3 text-center align-self-center mb-5">
                <img src="{{asset('/img/batros-logo-white-vertical.webp')}}" alt="Batros Marina Residences Logo" class="w-100">
            </div>

        </div>

        <div class="position-absolute bottom-0 start-0 w-100 text-center" style="z-index: 3;">
            <a href="#info" class="d-block link-light text-decoration-none fs-1 mb-3"><i class="fa-solid fa-bounce fa-circle-chevron-down"></i></a>
            <h1 class="text-white fs-1 mb-5 fw-light">{{__('Compara y elige el plan ideal')}}</h1>
        </div>

        <img width="330px" class="d-none d-lg-block position-absolute start-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:80%; transform: scaleX(-1);" loading="lazy">
        <img width="330px" class="d-none d-lg-block position-absolute end-0" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5; top:80%;" loading="lazy">
    </div>

    {{-- Cálculos --}}
    <div class="row justify-content-evenly my-6" id="info">

        <div class="col-11 col-lg-4 text-white card p-3 align-self-center mb-3 mb-lg-0">
            <form action="" method="get">

                <label for="unit_id" class="fw-bold">{{__('Selecciona una Unidad')}}</label>
                <select name="unit_id" id="unit_id" class="form-select mb-3" onchange="updateCalculations()">
                        <option value="" selected>{{__('Selecciona una Unidad')}}</option>
                    @foreach ($units as $unit)
                        <option value="{{$unit->id}}">{{__('Unidad')}} {{$unit->name}} - {{$unit->bedrooms}} {{__('Rec')}}, {{$unit->area}}m²</option>
                    @endforeach
                </select>

                {{-- <a href="#unitsModal" data-bs-toggle="modal" data-bs-target="#unitsModal" class="link-light d-block mb-3">Conoce las Unidades</a> --}}

                <label for="plan_id" class="fw-bold">{{__('Selecciona el Plan de Pagos')}}</label>
                <select name="plan_id" id="plan_id" class="form-select mb-2" onchange="updateCalculations()">
                    @foreach ($plans as $plan)
                        <option value="{{$plan->id}}">{{__('Plan')}} - {{$plan->name}}</option>
                    @endforeach
                </select>

            </form>
        </div>

        <div class="col-11 col-lg-5 px-0">

            <table class="table table-light table-striped shadow-6 table-bordered">
                <thead>
                    <tr>
                        <th class="text-center fs-4" colspan="2">
                            {{__('Unidad')}} - <span id="unit_name"></span> | 
                            {{__('Plan')}} - <span id="plan_name"></span>
                        </th>
                    </tr>
                </thead>

                <tbody class="fs-5 fw-light">
                    <tr>
                        <td>{{__('Precio de lista')}}</td>
                        <td id="price"></td>
                    </tr>

                    <tr id="discount_row" class="">
                        <td>
                            {{__('Descuento')}} (<span id="discount_percent"></span>%)
                        </td>
                        <td id="discount_amount"></td>
                    </tr>

                    <tr>
                        <td>{{__('Enganche')}} (<span id="down_percent"></span>%)</td>
                        <td id="down_amount"></td>
                    </tr>

                    <tr id="months_row" class="">
                        <td>{{__('Mensualidades')}} (<span id="month_percent"></span>%)</td>
                        <td id="month_amount"></td>
                    </tr>

                    <tr>
                        <td>{{__('Pago Final')}} (<span id="final_percent"></span>%)</td>
                        <td id="final_amount"></td>
                    </tr>

                    <tr>
                        <td class="fw-bold">{{__('Precio Final')}}</td>
                        <td class="fw-bold" id="final_price"></td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

    {{-- Modal de unidades --}}
    <div class="modal fade" id="unitsModal" tabindex="-1" aria-labelledby="unitsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="unitsModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="position-relative" id="contact-form">

    {{-- Formulario de contacto --}}
    <div class="row justify-content-evenly my-6">
    
        <div class="col-11 col-lg-6 col-xl-4 mb-6 card p-3" style="z-index: 10;">

            <h5 class="fs-2 fw-light text-white text-center">{{__('Contacta un agente')}} <br>{{__('para más información')}} </h5>
            <hr class="text-white w-100 mb-4 mx-auto" style="opacity: 1; height:2px;">

            <form action="{{route('send.email')}}#contact-form" method="post" class="pt-2 pt-lg-4">
                @csrf
                <input type="text" class="form-contact mb-3" name="name" id="name" placeholder="{{__('Nombre')}}" required maxlength="255" value="{{ old('name') }}">
                <input type="email" class="form-contact mb-3" name="email" id="email" placeholder="{{__('Correo')}}" required maxlength="255" value="{{ old('email') }}">
                <x-honeypot />
                <input type="number" class="form-contact mb-3" name="phone" id="phone" placeholder="{{__('Teléfono')}}" min="0" value="{{ old('phone') }}">
                <textarea class="form-contact mb-3" name="message" id="message" cols="30" rows="6" placeholder="{{__('Mensaje')}}" maxlength="255">{{ old('message') }}</textarea>
                <input type="hidden" name="url" value="{{url()->current()}}">
                <input type="hidden" name="utm_campaign" value="{{ request()->query('utm_campaign') }}">
                <div class="row justify-content-center mt-4">
                    <button type="submit" @if(session('message')) disabled @endif class="btn btn-blue col-12 col-lg-6 rounded-4 text-uppercase">{{__('Enviar')}}</button>
                </div>
            </form>

            @if (session('message'))
                <div class="fs-5 text-lightblue text-center mt-4">
                    <i class="fa-regular fa-circle-check"></i> {{__(session('message'))}}
                </div>
            @endif

            @php
                $errors = session('errors');
            @endphp
            @if ($errors)
                @foreach ($errors as $error)
                    <div class="fs-5 text-lightblue text-center my-3">
                        <i class="fa-regular fa-circle-xmark"></i> {{$error}}
                    </div>
                @endforeach
            @endif

        </div>
    
    </div>

    <img width="260px" class="d-none d-lg-block position-absolute end-0 top-50" src="{{asset('img/feather.webp')}}" alt="" style="z-index: 5;" loading="lazy">

</div>



    {{-- Form Modal --}}
    <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-blue">

                <div class="modal-header">
                    <div class="text-center fs-4 fw-light text-white w-100">
                        {{__('¿Necesitas más información?')}}
                        <div class="text-center fs-5">{{__('Déjanos tu información de contacto')}}</div>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('send.email')}}#contact-form" method="post" class="pt-2 pt-lg-4">
                        @csrf
                        <input type="text" class="form-contact mb-3" name="name" id="name" placeholder="{{__('Nombre')}}" required maxlength="255" value="{{ old('name') }}">
                        <input type="email" class="form-contact mb-3" name="email" id="email" placeholder="{{__('Correo')}}" required maxlength="255" value="{{ old('email') }}">
                        <x-honeypot />
                        <input type="number" class="form-contact mb-3" name="phone" id="phone" placeholder="{{__('Teléfono')}}" min="0" value="{{ old('phone') }}">
                        <textarea class="form-contact mb-3" name="message" id="message" cols="30" rows="6" placeholder="{{__('Mensaje')}}" maxlength="255">{{ old('message') }}</textarea>
                        <input type="hidden" name="url" value="{{url()->current()}}">
                        <input type="hidden" name="utm_campaign" value="{{ request()->query('utm_campaign') }}">
                        <div class="row justify-content-center mt-4">
                            <button type="submit" class="btn btn-blue col-12 col-lg-6 rounded-4 text-uppercase">{{__('Enviar')}}</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <footer>

        @php
            
            $agents = App\Models\Agent::all();
            $utm_medium = request()->query('utm_medium');
            $utm_campaign = urldecode( request()->query('utm_campaign') );
    
            if( $utm_medium == 'Asesores' or $utm_medium == 'Agents'){
                
                $agent = $agents->where('name', $utm_campaign)->first();
                
                if( isset($agent) ){
                    $phone = $agent->phone;
                    $email = $agent->email;
                }
                else{
                    $phone = '3223300316';
                    $email = 'info@batrosmarina.com';
                }
    
            }
            elseif( Cookie::get('agent') != null ){
                $agent_name = Cookie::get('agent');
                $agent = $agents->where('name', $agent_name)->first();
    
                if( isset($agent) ){
                    $phone = $agent->phone;
                    $email = $agent->email;
                    $profile = $agent->getFirstMedia('profile');
                }
                else{
                    $phone = '3223300316';
                    $email = 'info@batrosmarina.com';
                }
    
            }
            else{
                $phone = '3223300316';
                $email = 'info@batrosmarina.com';
            }
    
        @endphp
    
        <div class="row justify-content-evenly mb-5">
    
            <div class="col-12 col-lg-4">
                <img src="{{asset('img/century.svg')}}" alt="Century 21 Ocean Realty" class="col-10 col-lg-8 mb-4" loading="lazy">
                <div class="d-flex mt-4">
                    <i class="fa-solid fa-envelope fa-2x text-white me-3"></i>
                    <a id="mail_footer" href="mailto:{{$email}}" class="link-light d-block align-self-center text-decoration-none">{{$email}}</a>
                </div>
            </div>
    
            <div class="col-12 col-lg-4 text-white">
                <h6 class="fs-5 mt-3">{{__('Oficina en Olas Altas')}}</h6>
                <address class="fw-light">{{__('Calle Rodolfo Gómez 118, Zona Romántica, 48399, Puerto Vallarta, Jal.')}}</address>
    
                <h6 class="fs-5">{{__('Oficina en Marina Vallarta')}}</h6>
                <address class="fw-light">{{__('Calle Popa 112 L. 1B, Marina Vallarta, 48335, Puerto Vallarta, Jal.')}}</address>
            </div>
    
            <div class="col-12 col-lg-3 align-self-center text-center text-lg-start">
                <a href="https://www.instagram.com/batrosmarinaresidences/" target="_blank" rel="noopener noreferrer" class="link-light text-decoration-none">
                    <i class="fa-brands fa-3x fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/batrosmarinaresidences" target="_blank" rel="noopener noreferrer" class="link-light text-decoration-none ms-4">
                    <i class="fa-brands fa-3x fa-facebook"></i>
                </a>
            </div>
    
        </div>
    
        <div class="bg-darkblue text-center text-white py-3">
            <a href="{{route('privacy.policy')}}" class="link-light me-4">{{__('Políticas de Privacidad')}}</a>
            <span>Batros Marina Residences © {{date('Y')}}</span>
        </div>
    </footer>

    {{-- Whatsapp Button --}}
    <a id="floating_whatsapp" target="_blank" rel="noopener norefferer" href="https://wa.me/52{{$phone}}?text={{__('Hola vengo del sitio web de Batros Marina Residences')}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Contactar por WhatsApp')}}" class="shadow-4 text-center m-4 position-fixed bottom-0 end-0 d-block rounded-circle whatsapp landing" style="margin-bottom:96px; z-index:100;">
        <i class="fa-brands fa-3x fa-whatsapp" style="line-height: 1.2;"></i>
    </a>

    <script>
        let arrayUnits = @json($units_json);
        arrayUnits = JSON.parse(arrayUnits);

        let arrayPlans = @json($plans_json);
        arrayPlans = JSON.parse(arrayPlans);

        let unit_input = document.getElementById('unit_id');
        let plan_input = document.getElementById('plan_id');

        //table cells
        let unit_name = document.getElementById('unit_name');
        let plan_name = document.getElementById('plan_name');
        let price_cell = document.getElementById('price');
        let discount_percent = document.getElementById('discount_percent');
        let discount_amount = document.getElementById('discount_amount');
        let down_percent = document.getElementById('down_percent');
        let down_amount = document.getElementById('down_amount');
        let final_percent = document.getElementById('final_percent');
        let final_amount = document.getElementById('final_amount');
        let final_price = document.getElementById('final_price');
        let month_percent = document.getElementById('month_percent');
        let month_amount = document.getElementById('month_amount');
        const months_row = document.getElementById('months_row');
        const discount_row = document.getElementById('discount_row');

        //contador
        let i = 0;

        function updateCalculations(){

            let selected_unit;

            arrayUnits.forEach(unit => {
                if(unit.id == unit_input.value){
                    unit_name.innerHTML = unit.name
                    selected_unit = unit;
                }
            });

            let selected_plan;

            arrayPlans.forEach(plan => {
                if(plan.id == plan_input.value){
                    plan_name.innerHTML = plan.name
                    discount_percent.innerHTML = plan.discount;
                    selected_plan = plan;
                }
            });

            // number formatter.
            var formatter = new Intl.NumberFormat('es-MX', {
                style: 'currency',
                currency: selected_unit.currency,
            });

            //precio de lista
            let formatted_price = formatter.format(selected_unit.price);
            price_cell.innerHTML = formatted_price;

            //descuento
            let discounted = selected_unit.price * (selected_plan.discount/100);
            discount_amount.innerHTML = formatter.format(discounted);
            if(selected_plan.discount == 0 || selected_plan.discount == null){
                discount_row.classList = 'd-none';
            }else{
                discount_row.classList = ' ';
            }

            //precio con descuento
            discounted_price = selected_unit.price - discounted;
            final_price.innerHTML = formatter.format(discounted_price);

            //enganche
            let down_payment = discounted_price * (selected_plan.down_payment/100);
            down_percent.innerHTML = selected_plan.down_payment;
            down_amount.innerHTML = formatter.format(down_payment);

            //mensualidades
            let month_payment = discounted_price * (selected_plan.months_percent/100);
            month_percent.innerHTML = selected_plan.months_percent;
            month_amount.innerHTML = formatter.format(month_payment);
            if(selected_plan.months_percent == 0){
                months_row.classList = 'd-none';
            }else{
                months_row.classList = ' ';
            }

            //pago final
            let final_payment = discounted_price * (selected_plan.closing_payment/100);
            final_percent.innerHTML = selected_plan.closing_payment;
            final_amount.innerHTML = formatter.format(final_payment);

            i++;

            if(i == 5){
                const formModal = new bootstrap.Modal('#formModal');
                formModal.show();
            }
        }

        
    </script>
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Third party js -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-X92Y5NBQXW"></script>
    <script defer src="{{asset('js/third-party.js'); }}"></script>

</body>
</html>