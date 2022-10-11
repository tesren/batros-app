<footer>

    <div class="row justify-content-evenly mb-5">

        <div class="col-12 col-lg-4">
            <img src="{{asset('img/century.svg')}}" alt="Century 21 Ocean Realty" class="col-10 col-lg-8 mb-4">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fa-solid fa-3x text-white fa-phone"></i>
                </div>
                <div>
                    <a class="link-light d-block text-decoration-none mb-1" href="tel:+523222609689">+52 322 260 9689</a>
                    <a class="link-light d-block text-decoration-none" href="tel:+523226884352">+52 322 688 4352</a>
                </div>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-solid fa-envelope fa-3x text-white me-3"></i>
                <a href="mailto:info@c21oceanrealty.com" class="link-light d-block align-self-center text-decoration-none">info@c21oceanrealty.com</a>
            </div>
        </div>

        <div class="col-12 col-lg-4 text-white">
            <h6 class="fs-5 mt-3">{{__('Oficina en Olas Altas')}}</h6>
            <address class="fw-light">{{__('Calle Rodolfo Gómez 118, Zona Romántica, 48399, Puerto Vallarta, Jal.')}}</address>

            <h6 class="fs-5">{{__('Oficina en Marina Vallarta')}}</h6>
            <address class="fw-light">{{__('Calle Popa 112 L. 1B, Marina Vallarta, 48335, Puerto Vallarta, Jal.')}}</address>
        </div>

        <div class="col-12 col-lg-3 align-self-center">
            <a href="https://www.instagram.com/batros_marina_residences/" target="_blank" rel="noopener noreferrer" class="link-light text-decoration-none">
                <i class="fa-brands fa-3x fa-instagram"></i>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer" class="link-light text-decoration-none ms-4">
                <i class="fa-brands fa-3x fa-facebook"></i>
            </a>
        </div>

    </div>

    <div class="bg-darkblue text-center text-white py-3">
        <a href="#" class="link-light me-4">{{__('Políticas de Privacidad')}}</a>
        <span>Batros Marina Residences © {{date('Y')}}</span>
    </div>
</footer>