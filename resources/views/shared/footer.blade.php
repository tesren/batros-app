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
            <img src="{{asset('img/century.svg')}}" alt="Century 21 Ocean Realty" class="col-10 col-lg-8 mb-4">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fa-solid fa-3x text-white fa-phone"></i>
                </div>
                <div>
                    <a id="phone_footer" class="link-light d-block text-decoration-none fs-5" href="tel:+52{{$phone}}">+52 {{$phone}}</a>
                </div>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-solid fa-envelope fa-3x text-white me-3"></i>
                <a id="mail_footer" href="mailto:{{$email}}" class="link-light d-block align-self-center text-decoration-none">{{$email}}</a>
            </div>
        </div>

        <div class="col-12 col-lg-4 text-white">
            <h6 class="fs-5 mt-3">{{__('Oficina en Olas Altas')}}</h6>
            <address class="fw-light">{{__('Calle Rodolfo Gómez 118, Zona Romántica, 48399, Puerto Vallarta, Jal.')}}</address>

            <h6 class="fs-5">{{__('Oficina en Marina Vallarta')}}</h6>
            <address class="fw-light">{{__('Calle Popa 112 L. 1B, Marina Vallarta, 48335, Puerto Vallarta, Jal.')}}</address>
        </div>

        <div class="col-12 col-lg-3 align-self-center">
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