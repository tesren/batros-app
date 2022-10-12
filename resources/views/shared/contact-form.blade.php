<div class="position-relative" id="contact-form">

    <div class="row justify-content-center my-6">

        <div class="col-12 col-lg-6 col-xl-5 text-white mb-5 mb-lg-0">
            <h5 class="fs-1 fw-light">{{__('Contacta un agente')}} <br>{{__('para más información')}} </h5>
            <hr class="text-white col-12 col-lg-8 mb-4" style="opacity: 1; height:2px;">
            <img src="{{asset('img/batros-big-logo.png')}}" alt="Batros Marina Residences Logo" class="col-12 col-lg-7">
        </div>
    
        <div class="col-12 col-lg-6 col-xl-4 mb-6" style="z-index: 10;">
            <form action="{{route('send.email')}}#contact-form" method="post">
                @csrf
                <input type="text" class="form-contact mb-3" name="name" id="name" placeholder="{{__('Nombre')}}" required maxlength="255">
                <input type="email" class="form-contact mb-3" name="email" id="email" placeholder="{{__('Correo')}}" required maxlength="255">
                <input type="number" class="form-contact mb-3" name="phone" id="phone" placeholder="{{__('Teléfono')}}" min="0">
                <textarea class="form-contact mb-4" name="message" id="message" cols="30" rows="6" placeholder="{{__('Mensaje')}}" maxlength="255"></textarea>
                <input type="hidden" name="url" value="{{url()->current()}}">
                <button type="submit" class="btn btn-blue w-100">{{__('Enviar')}}</button>
            </form>
            @if (session('message'))
                <div class="fs-5 text-lightblue text-center mt-4">
                    <i class="fa-regular fa-circle-check"></i> {{__(session('message'))}}
                </div>
            @endif
        </div>
    
    </div>

    <img width="260px" class="d-none d-lg-block position-absolute end-0 top-50" src="{{asset('img/feather.png')}}" alt="" style="z-index: 5;">

</div>
