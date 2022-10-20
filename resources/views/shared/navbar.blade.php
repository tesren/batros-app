<nav class="navbar bg-blue navbar-expand-lg py-1 navbar-dark shadow-4">
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

            @php
              $route = Route::currentRouteName();
            @endphp

            <li class="nav-item me-1 me-lg-4">
              <a class="nav-link @if($route == 'es.home' or $route == 'en.home') active @endif" href="{{route('home')}}">{{__('Inicio')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
              <a class="nav-link @if($route == 'es.inventory' or $route == 'en.inventory') active @endif" href="{{route('inventory')}}">{{__('Inventario')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if($route == 'es.construction' or $route == 'en.construction') active @endif" href="{{route('construction')}}">{{__('Construcción')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if($route == 'es.lifestyle' or $route == 'en.lifestyle') active @endif" href="{{route('lifestyle')}}">{{__('Estilo de Vida')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if($route == 'es.about' or $route == 'en.about') active @endif" href="{{route('about')}}">{{__('Nosotros')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <a class="nav-link @if($route == 'es.contact' or $route == 'en.contact') active @endif" href="{{route('contact')}}">{{__('Contacto')}}</a>
            </li>

            <li class="nav-item me-1 me-lg-4">
                <button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </li>

            <li class="nav-item me-1 me-lg-4 align-self-end align-self-lg-center mt-3 mt-lg-0">

              @if (app()->getLocale() == 'es')

                @if($route == 'es.unit')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('unit', ['id'=>$unit->id], true, 'en');}}">{{__('EN')}}</a>
                @elseif($route == 'es.search')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('search', request()->query(), true, 'en'); }}">{{__('EN')}}</a>
                @else
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route($route, [], true, 'en');}}">{{__('EN')}}</a>
                @endif

              @else

                @if($route == 'en.unit')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('unit', ['id'=>$unit->id], true, 'es');}}">{{__('ES')}}</a>
                @elseif($route == 'en.search')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('search', request()->query(), true, 'es'); }}">{{__('ES')}}</a>
                @else
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route($route, [], true, 'es');}}">{{__('ES')}}</a>
                @endif

              @endif

            </li>
            
          </ul>

        </div>
      </div>

    </div>
</nav>