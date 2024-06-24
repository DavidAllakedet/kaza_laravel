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
            'cover' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-1.jpg',
            'host_id' => $host1->id,
        ]);

        // Création des équipements pour le premier logement
        $equipement1 = Equipement::create(['name' => 'Wi-fi']);
        $equipement2 = Equipement::create(['name' => 'Chauffage']);
        $equipement3 = Equipement::create(['name' => 'Télévision']);
        $equipement4 = Equipement::create(['name' => 'Cuisine équipée']);

        // Attachement des équipements au premier logement
        $logement1->equipements()->attach([$equipement1->id, $equipement2->id, $equipement3->id, $equipement4->id]);

        // Création des tags pour le premier logement
        $tag1 = Tag::create(['name' => 'République']);
        $tag2 = Tag::create(['name' => 'Canal Saint Martin']);
        $tag3 = Tag::create(['name' => 'Loft']);

        // Attachement des tags au premier logement
        $logement1->tags()->attach([$tag1->id, $tag2->id, $tag3->id]);

        // Répéter le processus pour un deuxième logement avec des données distinctes
        $host2 = Host::create([
            'name' => 'Jean Dupont',
            'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-12.jpg'
        ]);

        $logement2 = Logement::create([
            'title' => 'Appartement moderne près de Montmartre',
            'description' => "Cet appartement moderne est situé à proximité de Montmartre, offrant une vue imprenable sur la ville. Parfait pour les amateurs de culture et d'histoire.",
            'location' => 'Ile de France - Paris 18e',
            'rating' => 5,
            'cover' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-1.jpg',
            'host_id' => $host2->id,
        ]);

        $equipement5 = Equipement::create(['name' => 'Wi-fi']);
        $equipement6 = Equipement::create(['name' => 'Balcon']);
        $equipement7 = Equipement::create(['name' => 'Machine à laver']);
        $equipement8 = Equipement::create(['name' => 'Parking']);

        $logement2->equipements()->attach([$equipement5->id, $equipement6->id, $equipement7->id, $equipement8->id]);

        $tag4 = Tag::create(['name' => 'Montmartre']);
        $tag5 = Tag::create(['name' => 'Vue panoramique']);
        $tag6 = Tag::create(['name' => 'Moderne']);

        $logement2->tags()->attach([$tag4->id, $tag5->id, $tag6->id]);
    }
}
