<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logement;
use App\Models\Host;
use App\Models\Equipement;
use App\Models\Tag;

class LogementSeeder extends Seeder
{
    public function run()
    {
        // Création du premier hôte
        $host1 = Host::create([
            'name' => 'Anna Cornet',
            'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-11.jpg'
        ]);

        // Création du premier logement associé au premier hôte
        $logement1 = Logement::create([
            'title' => 'Appartement spacieux canal Saint-Martin',
            'description' => "Situé au bord du canal Saint-Martin, ce loft aux dimensions généreuses vous accueillera avec une décoration moderne et épurée. Une adresse idéale pour découvrir Paris.",
            'location' => 'Ile de France - Paris 10e',
            'rating' => 4,
            'cover' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-1.jpg',
            'host_id' => $host1->id,
        ]);

        // Ajout des équipements pour le premier logement
        $equipementsLogement1 = [
            ['name' => 'Wi-fi'],
            ['name' => 'Balcon'],
            ['name' => 'Machine à laver'],
            ['name' => 'Parking'],
        ];

        foreach ($equipementsLogement1 as $equipementData) {
            $equipement = Equipement::create($equipementData);
            $logement1->equipements()->attach($equipement->id);
        }

        // Ajout des tags pour le premier logement
        $tagsLogement1 = [
            'Tour Eiffel',
            'Romantique',
            'Cosy'
        ];

        foreach ($tagsLogement1 as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $logement1->tags()->attach($tag->id);
        }

        // Exemple de mise à jour du premier logement
        $logement1 = Logement::find(1);
        $logement1->pictures = [
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-1.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-2.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-3.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-4.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-5.jpg"
        ];
        $logement1->save();


        // Répéter le processus pour le deuxième logement avec des données distinctes
        $host2 = Host::create([
            'name' => 'Jean Dupont',
            'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-12.jpg'
        ]);

        $logement2 = Logement::create([
            'title' => 'Appartement moderne près de Montmartre',
            'description' => "Cet appartement moderne est situé à proximité de Montmartre, offrant une vue imprenable sur la ville. Parfait pour les amateurs de culture et d'histoire.",
            'location' => 'Ile de France - Paris 18e',
            'rating' => 5,
            'cover' => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-1.jpg",
            'host_id' => $host2->id,
        ]);

        // Ajout des équipements pour le deuxième logement
        $equipementsLogement2 = [
            ['name' => 'Wi-fi'],
            ['name' => 'Balcon'],
            ['name' => 'Machine à laver'],
            ['name' => 'Parking'],
        ];

        foreach ($equipementsLogement2 as $equipementData) {
            $equipement = Equipement::create($equipementData);
            $logement2->equipements()->attach($equipement->id);
        }

        // Ajout des tags pour le deuxième logement
        $tagsLogement2 = [
            'Tour Eiffel',
            'Romantique',
            'Cosy'
        ];

        foreach ($tagsLogement2 as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $logement2->tags()->attach($tag->id);
        }

        // Exemple de mise à jour du premier logement
        $logement2 = Logement::find(1);
        $logement2->pictures = [
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-1.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-2.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-3.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-4.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-5.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-6.jpg"
        ];
        $logement2->save();


        // Répéter le processus pour le troisième logement avec des données distinctes
        $host3 = Host::create([
            'name' => 'Marie Leblanc',
            'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-13.jpg'
        ]);

        $logement3 = Logement::create([
            'title' => 'Appartement cosy à proximité de la Tour Eiffel',
            'description' => "Cet appartement cosy est situé à proximité de la Tour Eiffel, offrant une vue imprenable sur le monument. Idéal pour un séjour romantique à Paris.",
            'location' => 'Ile de France - Paris 7e',
            'rating' => 5,
            'cover' => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-1.jpg",
            'host_id' => $host3->id,
        ]);

        // Ajout des équipements pour le troisième logement
        $equipementsLogement3 = [
            ['name' => 'Wi-fi'],
            ['name' => 'Balcon'],
            ['name' => 'Machine à laver'],
            ['name' => 'Parking'],
        ];

        foreach ($equipementsLogement3 as $equipementData) {
            $equipement = Equipement::create($equipementData);
            $logement3->equipements()->attach($equipement->id);
        }

        // Ajout des tags pour le troisième logement
        $tagsLogement3 = [
            'Tour Eiffel',
            'Romantique',
            'Cosy'
        ];

        foreach ($tagsLogement3 as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $logement3->tags()->attach($tag->id);
        }
        // Exemple de mise à jour du premier logement
        $logement3 = Logement::find(1);
        $logement3->pictures = [
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-1.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-2.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-3.jpg",
            "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-4.jpg"
        ];
        $logement3->save();

    }
}

