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
            width: 100%;
            overflow: hidden;
            margin: 0 auto;
        }

        .carousel-container {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            min-width: 100%;
            flex: 0 0 auto;
            margin-right: 10px;
        }

        /* Styles pour les boutons de navigation */
        .carousel-controls {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .carousel-control-btn {
            cursor: pointer;
            padding: 8px 16px;
            background-color: #3182ce;
            color: white;
            border-radius: 999px;
            transition: background-color 0.3s ease;
        }

        .carousel-control-btn:hover {
            background-color: #2c5282;
        }
    </style>
</head>
<body class="antialiased pt-10 pb-16 md:pb-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <main class="mt-10 md:mt-12 lg:mt-16">
            <div class="space-y-10 md:space-y-16">
                <div class="max-w-12xl rounded overflow-hidden shadow-lg relative">
                    <div class="carousel">
                        <div class="carousel-container" id="carouselContainer">
                            @foreach($logement->pictures as $index => $picture)
                                <div class="carousel-item" data-index="{{ $index }}">
                                    <img class="w-full" src="{{ $picture }}" alt="Image">
                                </div>
                            @endforeach
                        </div>
                        <div class="carousel-controls">
                            <button class="carousel-control-btn" id="prevBtn">&lt; Prev</button>
                            <button class="carousel-control-btn" id="nextBtn">Next &gt;</button>
                        </div>
                    </div>
                </div>
                <div class="text-xl lg:text-2xl text-slate-600 mt-5">
                    <p>{{ $logement->description }}</p>
                </div>
                <ul class="flex flex-wrap gap-2 mt-5">
                    @foreach($logement->tags as $tag)
                        <li><a href="#" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
                <div class="text-xl lg:text-2xl text-slate-600 mt-5">
                    <ul>
                        @foreach ($logement->equipements as $equipement)
                            <li>{{ $equipement->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @if ($logement->host)
                    <div class="mt-5">
                        <h2 class="text-xl lg:text-2xl font-semibold text-gray-800">Host</h2>
                        <div class="flex items-center mt-2">
                            <img src="{{ asset($logement->host->picture) }}" alt="Host Photo" class="w-12 h-12 rounded-full">
                            <p class="ml-2">{{ $logement->host->name }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </main>
    </div>

    <script>
        // JavaScript pour le carousel
        document.addEventListener('DOMContentLoaded', function() {
            const carouselContainer = document.getElementById('carouselContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            let currentIndex = 0;

            function showSlide(index) {
                const slides = carouselContainer.getElementsByClassName('carousel-item');
                if (index < 0) {
                    currentIndex = slides.length - 1;
                } else if (index >= slides.length) {
                    currentIndex = 0;
                } else {
                    currentIndex = index;
                }
                carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            prevBtn.addEventListener('click', function() {
                showSlide(currentIndex - 1);
            });

            nextBtn.addEventListener('click', function() {
                showSlide(currentIndex + 1);
            });
        });
    </script>
</body>
</html>
