<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased pt-10 pb-16 md:pb-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <main class="mt-10 md:mt-12 lg:mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- Boucle pour les logements --}}
            @foreach($logements as $logement)
                <div class="max-w-sm rounded overflow-hidden shadow-lg relative">
                    <img class="w-full" src="{{ $logement->cover }}" alt="{{ $logement->title }}">
                    <div class="absolute bottom-0 left-0 w-full">
                        <a href="{{ route('logement.show', $logement->id) }}" class="inline-block hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            {{ $logement->title }}
                        </a>
                    </div>
                </div>
            @endforeach
            {{-- Fin de la boucle pour les logements --}}
        </main>
    </div>
</body>
</html>
