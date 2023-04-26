<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/second.css') }}" />
    <link rel="shortcut icon" href="{{ asset('pictures/favicon.png') }}" type="image/x-icon" />
    <title>Event Ticket - Home</title>
</head>

<body>
    <header class="w-full">
        <nav
            class="navBar flex items-center justify-between flex-wrap w-full py-4 md:py-0 px-4 text-lg text-gray-700 bg-white border-b border-slate-900">
            <div>
                <a href="{{ route('accueil') }}">
                    <img src="{{ asset('pictures/logo.png') }}" alt="Logo" class="logo" />
                </a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button"
                class="h-10 w-10 border-slate-500 border-4 rounded-md cursor-pointer md:hidden" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <div class="hidden md:flex md:items-center md:w-auto md:justify-center" id="menu">
                <ul class="pt-4 items-center md:flex md:justify-between md:pt-0">
                    <li>
                        <a class="font text-xs md:p-4 py-2 block text-bold" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    @auth
                        <li>
                            <a class="font text-xs md:p-4 py-2 block text-bold" href="/create-event">Organiser un
                                évènement</a>
                        </li>
                        <li>
                            <a class="font text-xs md:p-4 py-2 block text-bold" href="/event">Plus d'évènements</a>
                        </li>
                        <li>
                            <a class="font text-xs md:p-4 py-2 block text-bold" href="/profile">Mon Profile</a>
                        </li>
                        <li>
                            <a class="font text-xs md:p-4 py-2 block text-bold" href="/logout">Se Deconnecter</a>
                        </li>
                    @else
                        <li>
                            <a class="font text-xs md:p-4 py-2 block text-bold" href="{{ route('login') }}">Se Connecter</a>
                        </li>
                        <li>
                            <a class="font text-xs md:p-4 py-2 block text-bold"
                                href="{{ route('register') }}">S'inscrire</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>

    <section class="section-content">
        <div class="flash-message">
        </div>
        @yield('content')
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
