<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/publicTemplate.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Musik</title>
</head>
<body>
    <header>
    {{-- 
        <div id="logo">
            <a href="{{ url('') }}">
            MUSIK
            </a>
        </div>
        <nav>
            <ul>
                @if (Auth::check())
                <li><a href="{{ url('membre') }}">Espace membre</a></li>
                @else
                <li><a href="{{ url('login') }}">Connexion</a></li>
                <li><a href="{{ url('register') }}">S'inscrire</a></li>
                @endif
            </ul>
        </nav>

    --}}

        <div id="logo">
            <a href="{{ url('') }}">
                    MUSIK
            </a>
        </div>

        <nav id="topNavigation">
            <ul>
                <li>
                    <a href="{{ url('login') }}">
                        Connexion
                    </a>
                </li>
                <li>
                    <a href="{{ url('register') }}">
                        S'inscrire
                    </a>
                </li>
            </ul>
        </nav>



    </header>

    <main class="py-4">
            @yield('content')
        </main>
    
</body>
</html>
