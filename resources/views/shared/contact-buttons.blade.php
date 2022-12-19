<div class="position-fixed end-0 bottom-0" style="z-index: 100;">

    @php
        
        $agents = App\Models\Agent::all();
        $utm_medium = request()->query('utm_medium');
        $utm_campaign = urldecode( request()->query('utm_campaign') );

        if( $utm_medium == 'Asesores' or $utm_medium == 'Agents'){
            
            $agent = $agents->where('name', $utm_campaign)->first();
            
            if( isset($agent) ){
                $phone = $agent->phone;
            }
            else{
                $phone = '3223300316';
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
        }

    @endphp

    <a id="floating_whatsapp" target="_blank" rel="noopener norefferer" href="https://wa.me/52{{$phone}}?text={{__('Hola vengo del sitio web de Batros Marina Residences')}}" class="shadow-4 text-center me-4 d-block rounded-circle whatsapp" style="margin-bottom:96px;">
        <i class="fa-brands fa-3x fa-whatsapp" style="line-height: 1.2;"></i>
    </a>

    {{-- <a href="#go-back-up" class="link-light text-decoration-none me-4 d-block text-center" style="margin-bottom:96px;">
        <i class="fa-solid fa-2x fa-circle-chevron-up"></i>
    </a> --}}

</div>