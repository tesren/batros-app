<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('titles')
    @include('shared.favicon')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/batros.css')}}">

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P4W6R6S');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X92Y5NBQXW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X92Y5NBQXW');
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! htmlScriptTagJsApi() !!}

</head>

<body class="position-relative">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4W6R6S" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102724669265564");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            xfbml            : true,
            version          : 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    @include('shared.navbar')
    @yield('content')
    @include('shared.search-modal')
    @include('shared.footer')
    @include('shared.contact-buttons')

    {{-- Cookies Modal --}}
    <div class="modal fade" id="cookiesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cookiesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content green-text bg-blue text-white">
                <div class="modal-header fw-normal-sackers">
                    <h5 class="modal-title" id="cookiesModalLabel">{{__('Política de cookies')}}</h5>
                </div>
                <div class="modal-body fw-normal-zen">
                    <p class="fs-5 fw-light">{{__('Utilizamos Cookies propias y de terceros en nuestro sitio web para mejorar nuestros servicios y la experiencia en el sitio')}}</p>
                    <form action="{{route('set.agent.cookie')}}" method="get">
                        @csrf
                        <input type="hidden" name="agent_cookie" value="{{request()->query('utm_campaign') ?? 'Sin Agente'}}">
                        <button type="submit" class="btn btn-blue w-100">{{__('Aceptar Cookies')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/fontawesome.min.js')}}" async></script>

    @if (Cookie::get('agent') == null)
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(event) {
                const cookiesModal = new bootstrap.Modal('#cookiesModal');
                //cookiesModal = document.getElementById('cookiesModal'); 
                cookiesModal.show();
            });
        </script>
    @endif

    @yield('javascript')
</body>

</html>