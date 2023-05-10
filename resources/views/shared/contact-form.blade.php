<div class="position-relative" id="contact-form">

    <div class="row justify-content-evenly my-6">

        @php
        
            $card_agents = App\Models\Agent::all();
            $utm_medium = request()->query('utm_medium');
            $utm_campaign = urldecode( request()->query('utm_campaign') );

            if( $utm_medium == 'Asesores' or $utm_medium == 'Agents'){
                
                $agent = $card_agents->where('name', $utm_campaign)->first();
                
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
            elseif( Cookie::get('agent') != null ){
                $agent_name = Cookie::get('agent');
                $agent = $card_agents->where('name', $agent_name)->first();

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

        <div class="col-12 col-lg-6 col-xl-5 text-white mb-5 mb-lg-0 text-center">
            <h5 class="fs-2 fw-light">{{__('Contacta un agente')}} <br>{{__('para más información')}} </h5>
            <hr class="text-white col-10 col-lg-8 mb-4 mx-auto" style="opacity: 1; height:2px;">

            @if ( isset($agent) )
                <img src="{{$profile->getUrl()}}" alt="{{$agent->name}}" class="rounded-circle mb-2 shadow-7" style="height: 220px; width:220px; object-fit:cover; object-position:top;" loading="lazy">
                <h6 class="fs-3 mb-0">{{$agent->name}}</h6>
                <hr class="text-white col-8 col-lg-6 my-2 mx-auto" style="opacity: 1; height:2px;">
                <div class="mb-2">{{__('Agente Inmobiliario')}}</div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <a class="link-light text-decoration-none" href="tel:+52{{$phone}}">+52 {{$phone}}</a>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:{{$email}}" class="link-light text-decoration-none">{{$email}}</a>
                </div>
            @else
                <img src="{{asset('img/batros-big-logo.webp')}}" alt="Batros Marina Residences Logo" class="col-12 col-lg-7" loading="lazy">
            @endif

        </div>
    
        <div class="col-12 col-lg-6 col-xl-4 mb-6" style="z-index: 10;">
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
