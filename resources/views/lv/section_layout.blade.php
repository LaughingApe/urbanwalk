<!DOCTYPE html>
<html lang="lv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title') | Pilsētvide ceļā uz universitāti</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" /> 

        <link href="/css/main.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <nav class="section-nav">
            <div class="navigate left">
                @yield('previous-link')
            </div>
            <a class="logo" href={{ url('/') }}>
                <img src="/assets/logo_white.png" />
            </a>
            <div class="navigate right">
                @yield('next-link')
            </div>
        </nav>
        @yield('content')
    </body>

    @include('lv.footer')
</html>
