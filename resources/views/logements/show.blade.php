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
            padding: 10px;


        }

        .accordion-content[data-visible="true"] {
            display: block;

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
    <div class="mx-auto max-w-12xl px-4 sm:px-6 lg:px-8 xl:px-40">
        <main class="mt-10 md:mt-12 lg:mt-16 space-y-10 md:space-y-12 lg:space-y-14">
            @if (isset($logement))
            @if ($logement->pictures instanceof Illuminate\Database\Eloquent\Collection && $logement->pictures->isNotEmpty())
                <div class="carousel">
                    <div class="carousel-container" id="carouselContainer">
                        @foreach($logement->pictures as $picture)
                            <div class="carousel-item">
                                <img class="w-full h-full object-cover" src="{{ $picture->url }}" alt="Image">
                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-controls">
                        <button class="carousel-control-btn" id="prevBtn" style="transform: rotate(-90deg)">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7157 10.7897C17.0462 10.1202 15.9591 10.1202 15.2897 10.7897L5.0075 21.0719C4.33798 21.7414 4.33798 22.8285 5.0075 23.4979C5.67693 24.1673 6.76407 24.1673 7.4335 23.4979L16.5055 14.4259L25.5775 23.4926C26.2469 24.162 27.3341 24.162 28.0035 23.4926C28.6729 22.8231 28.6729 21.736 28.0035 21.0666L17.7213 10.7843L17.7157 10.7897Z" fill="white"/>
                            </svg>
                        </button>
                        <button class="carousel-control-btn" id="nextBtn" style="transform: rotate(90deg)">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.2897 10.7897C15.9591 10.1202 17.0462 10.1202 17.7157 10.7897L27.9979 21.0719C28.6674 21.7414 28.6674 22.8285 27.9979 23.4979C27.3285 24.1673 26.2414 24.1673 25.572 23.4979L16.5 14.4259L7.42804 23.4926C6.75862 24.162 5.67148 24.162 5.00206 23.4926C4.33265 22.8231 4.33265 21.736 5.00206 21.0666L15.2843 10.7843L15.2897 10.7897Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                    <p class="carousel-status" id="carouselStatus"></p>
                </div>
            @else
                <p>Aucune image disponible.</p>
            @endif

            <div class="sect1">
                <div class="sect1-info">
                    <div class="text-xl lg:text-3xl text-slate-600 mt-5" style="color: #FF6060;">
                        <p>{{ $logement->title }}</p>
                    </div>
                    <div class="text-xl lg:text-2xl text-slate-600 mt-5">
                        <p>{{ $logement->location }}</p>
                    </div>
                </div>

                @if($logement->host)
                <div class="host-info mt-5">
                    <img src="{{ $logement->host->picture }}" alt="Photo de l'hôte" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                    <div>
                        @php
                            $nameParts = explode(' ', $logement->host->name);
                        @endphp
                        @foreach ($nameParts as $index => $part)
                            <p class="text-2xl text-slate-700" style="margin-bottom: {{ $index === 0 ? '0' : '8px' }}; color: #FF6060;">{{ $part }} </p>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

            <div class="flex flex-wrap gap-2 mt-5 justify-between items-center">
                <div class="flex items-center gap-2">
                    @foreach($logement->tags as $tag)
                        <span class="px-3 py-1 text-lg" style="background-color: #FF6060; color: white; border-radius: 9999px; font-size: 0.875rem;">{{ $tag->name }}</span>
                    @endforeach
                </div>

                <div class="stars mt-2">
                    @php
                        $rating = $logement->rating; // Récupérer la note depuis la base de données
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="{{ $i <= $rating ? 'filled' : '' }}" style="width: 28px; height: 28px; margin-right: 6px;">
                            <path d="M12 .587l3.668 10.634h11.333l-9.167 6.651 3.5 10.656-9.334-6.866-9.334 6.866 3.5-10.656-9.167-6.651h11.333z"/>
                        </svg>
                    @endfor
                </div>
                
            </div>
                <div class="accordion">
                    <!-- Description Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordionContent('desc', this)">
                            <h2 class="text-lg font-semibold">Description</h2>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.2897 10.7897C15.9591 10.1202 17.0462 10.1202 17.7157 10.7897L27.9979 21.0719C28.6674 21.7414 28.6674 22.8285 27.9979 23.4979C27.3285 24.1673 26.2414 24.1673 25.572 23.4979L16.5 14.4259L7.42804 23.4926C6.75862 24.162 5.67148 24.162 5.00206 23.4926C4.33265 22.8231 4.33265 21.736 5.00206 21.0666L15.2843 10.7843L15.2897 10.7897Z" fill="currentColor"/>
                            </svg>

                        </div>
                        <div class="accordion-content" id="desc" data-visible="false">
                            <p>{{ $logement->description }}</p>
                        </div>
                    </div>
                    <!-- Equipments Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordionContent('equip', this)">
                            <h2 class="text-lg font-semibold">Équipements</h2>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.2897 10.7897C15.9591 10.1202 17.0462 10.1202 17.7157 10.7897L27.9979 21.0719C28.6674 21.7414 28.6674 22.8285 27.9979 23.4979C27.3285 24.1673 26.2414 24.1673 25.572 23.4979L16.5 14.4259L7.42804 23.4926C6.75862 24.162 5.67148 24.162 5.00206 23.4926C4.33265 22.8231 4.33265 21.736 5.00206 21.0666L15.2843 10.7843L15.2897 10.7897Z" fill="currentColor"/>
                            </svg>

                        </div>
                        <div class="accordion-content" id="equip" data-visible="false">
                            <ul>
                                @foreach ($logement->equipements as $equipement)
                                    <li>{{ $equipement->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @else
                <p>Logement non trouvé.</p>
            @endif
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselContainer = document.getElementById('carouselContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            let currentIndex = 0;
            const totalSlides = carouselContainer.getElementsByClassName('carousel-item').length;
            const carouselStatus = document.getElementById('carouselStatus');

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
                updateCarouselStatus(currentIndex);
            }

            function updateCarouselStatus(index) {
                carouselStatus.textContent = `${index + 1} / ${totalSlides}`;
            }

            prevBtn.addEventListener('click', function() {
                showSlide(currentIndex - 1);
            });

            nextBtn.addEventListener('click', function() {
                showSlide(currentIndex + 1);
            });

            updateCarouselStatus(currentIndex);
        });


        function toggleAccordionContent(id, header) {
            const content = document.getElementById(id);
            const isVisible = content.getAttribute('data-visible') === 'true';

            content.setAttribute('data-visible', String(!isVisible));
            header.classList.toggle('open', !isVisible);
        }
    </script>
</body>
</html>
