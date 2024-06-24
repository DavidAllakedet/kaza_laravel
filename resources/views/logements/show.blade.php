<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased pt-10 pb-16 md:pb-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <main class="mt-10 md:mt-12 lg:mt-16">
            <div class="space-y-10 md:space-y-16">
                <div class="max-w-sm rounded overflow-hidden shadow-lg relative">
                    <img class="w-full" src="{{ $logement->cover }}" alt="{{ $logement->title }}">
                    <div class="absolute bottom-0 left-0 w-full">
                        <a href="{{ route('logement.show', $logement->id) }}" class="inline-block hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            {{ $logement->title }}
                        </a>
                    </div>
                </div>
                <div class="text-xl lg:text-2xl text-slate-600 mt-5">
                    <p>{{ $logement->description }}</p>
                </div>
                <ul class="flex flex-wrap gap-2 mt-5">
                    @foreach($logement->tags as $tag)
                        <li><a href="{{ route('tag.show', $tag->id) }}" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </main>
    </div>
</body>
</html>
