<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Styles spécifiques pour le carousel */

        
        .carousel {
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            border-radius: 40px;
        }

        .carousel-container {
            display: flex;
            height: 500px;
            transition: transform 0.5s ease;
            border-radius: 40px;
        }

        .carousel-item {
            min-width: 100%;
            flex: 0 0 100%;
            object-fit: cover;
            border-radius: 40px;
        }
        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-control-btn {
            color: white;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .carousel-control-btn svg {
            
            width: 100px;
            height: 100px;
           
        }

        .carousel-status {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .carousel-p {
            position: absolute;
            right: 50%;
            bottom: 0px;
            font-weight: 500;
            color: white;
            font-family: Montserrat;
            font-size: 18px;
        }
        .sect1 {
            display:flex;
            flex-direction: row;
            width: 100%;
            justify-content: space-between
        }

        .stars {
            display: flex;
            align-items: center;
        }

        .stars svg {
            width: 20px;
            height: 20px;
            margin-right: 2px;
            fill: #ccc; /* Couleur par défaut des étoiles (grise) */
        }

        .stars .filled {
            fill: #FF6060; /* Couleur des étoiles remplies (jaune) */
        }

        .host-info {
            display: flex;
            flex-direction: row-reverse;
            gap: 25px;
            align-items: center;
            margin-top: 20px;
        }

        .host-info img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .accordion {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .accordion-item {
            width: 100%;
            /* border-bottom: 1px solid #ddd; */
        }

        .accordion-header {
            padding: 10px;
            cursor: pointer;
            background-color: #FF6060;
            border-radius: 5px 5px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;


        }

        .accordion-content {
            display: none;
            


        }

        .accordion-content[data-visible="true"] {
            display: block;
            padding: 10px 50px;

        }

        .accordion-header svg {
            transition: transform 0.3s ease;
            transform: rotate(0deg);
            fill: white;
        }

        .accordion-header.open svg {
            transform: rotate(-180deg);
        }
    </style>
</head>
<body class="antialiased pt-10 pb-16 md:pb-32">

    {{-- Conteneur global --}}
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <header class="flex justify-between items-center space-x-5 text-slate-900">

            {{-- Logo --}}
        <a href="{{ route('index') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8">
        </a>

            {{-- Formulaire de recherche --}}
            <form action="{{ route('index') }}" class="pb-3 pr-2 flex items-center border-b border-b-slate-300 text-slate-300 focus-within:border-b-slate-900 focus-within:text-slate-900 transition">
                <input id="search" value="" class="px-2 w-full outline-none leading-none placeholder-slate-400" type="search" name="search" placeholder="Rechercher un article">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>

            {{-- Navigation pour les écrans mobiles --}}
            <nav x-data="{ open: false }" x-cloak class="relative">
                <button
                    @click="open = !open"
                    @click.outside="if (open) open = false"
                    class="md:hidden w-8 h-8 flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </button>
                <ul
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="md:hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    tabindex="-1"
                >
                    <li><a href="" class="block px-4 py-2 text-sm hover:bg-gray-100" style="color: #FF6060;">Accueil</a></li>
                    <li><a href="" class="flex items-center px-4 py-2 font-semibold text-sm hover:bg-gray-100" style="color: #FF6060;"> Apropos</a></li>
                </ul>


                {{-- Navigation pour les écrans larges --}}
                <ul class="hidden md:flex space-x-12 font-semibold">
                    <li><a href="" style="color: #FF6060;">Accueil</a></li>
                    <li> <a href="" class="flex items-center group" style="color: #FF6060;">Apropos</a></li>
                </ul>
                
            </nav>
        </header>

       
        
            {{ $slot }} {{-- Emplacement où sera injecté le contenu spécifique de chaque page --}}
        
    </div>

    <footer>
        
    </footer>
</body>
</html>
