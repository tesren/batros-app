<nav class="navbar bg-blue navbar-expand-lg py-1 navbar-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="{{route('home')}}">
        <img width="250px" src="{{asset('img/batros-logo.png')}}" alt="Logo Batros Marina Residences">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end bg-blue" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Batros Marina Residences</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">

          <ul class="navbar-nav justify-content-end flex-grow-1 text-end text-lg-start">

            <li class="nav-item me-1 me-lg-4">
              <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" href="{{route('home')}}">{{__('Inicio')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
              <a class="nav-link" href="#">{{__('Inventario')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if(Route::currentRouteName() == 'construction') active @endif" href="{{route('construction')}}">{{__('Construcción')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if(Route::currentRouteName() == 'lifestyle') active @endif" href="{{route('lifestyle')}}">{{__('Estilo de Vida')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link" href="#">{{__('Nosotros')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if(Route::currentRouteName() == 'contact') active @endif" href="{{route('contact')}}">{{__('Contacto')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </li>

            <li class="nav-item me-1 me-lg-4 align-self-end align-self-lg-center mt-3 mt-lg-0">
                <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="#">{{__('ES')}}</a>
            </li>
            
          </ul>

        </div>
      </div>

    </div>
</nav>