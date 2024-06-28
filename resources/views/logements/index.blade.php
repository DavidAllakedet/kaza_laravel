
    <x-layout>
        <main class="mt-10 md:mt-12 lg:mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- Boucle pour les logements --}}
            @foreach($logements as $logement)
            <a href="{{ route('logement.show', $logement->id) }}" class="block max-w-sm rounded overflow-hidden shadow-lg relative hover:shadow-xl transition duration-300">
                <img class="w-full" style="height: 320px"; src="{{ $logement->cover }}" alt="{{ $logement->title }}">
                <div class="absolute bottom-0 left-0 w-full text-white p-4" >
                    <h2 class="text-xl font-bold">
                        {{ $logement->title }}
                    </h2>
                </div>
            </a>
            
            
            
            @endforeach
            {{-- Fin de la boucle pour les logements --}}
        </main>
   
    </x-layout>