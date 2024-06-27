<?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use App\Models\Logement;
// use App\Models\Tag; // Assurez-vous d'importer le modèle Tag
// use Faker\Factory as Faker;

// class LogementSeeder extends Seeder
// {
//     public function run()
//     {
//         $faker = Faker::create();

//         for ($i = 0; $i < 20; $i++) {
//             $logement = new Logement([
//                 'title' => $faker->sentence(3),
//                 'description' => $faker->paragraph(4),
//                 'location' => $faker->city,
//                 'rating' => $faker->numberBetween(1, 5),
//                 'cover' => $faker->imageUrl(),
//                 'pictures' => [$faker->imageUrl(), $faker->imageUrl(), $faker->imageUrl()], // Tableau d'images
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);
//             $logement->save();

//             // Associer aléatoirement des tags à chaque logement
//             $this->attachRandomTags($logement);
//         }
//     }

//     // Méthode pour attacher aléatoirement des tags à un logement
//     private function attachRandomTags(Logement $logement)
//     {
//         $tags = Tag::inRandomOrder()->limit(rand(0, 3))->get(); // Sélectionner entre 0 et 3 tags aléatoirement
//         $logement->tags()->attach($tags->pluck('id')->toArray()); // Attacher les tags au logement
//     }
// }

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logement;
use App\Models\Host;
use App\Models\Equipement;
use App\Models\Tag;
use App\Models\Picture;

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
            'rating' => 5,
            'cover' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-1.jpg',
            'host_id' => $host1->id,
        ]);

        // Ajout des équipements pour le premier logement
        $equipementsLogement1 = ['Wi-fi', 'Balcon', 'Machine à laver', 'Parking'];

        foreach ($equipementsLogement1 as $equipementName) {
            $equipement = Equipement::firstOrCreate(['name' => $equipementName]);
            $logement1->equipements()->attach($equipement->id);
        }

        // Ajout des tags pour le premier logement
        $tagsLogement1 = ['Tour Eiffel', 'Romantique', 'Cosy'];

        foreach ($tagsLogement1 as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $logement1->tags()->attach($tag->id);
        }

        // Exemple de mise à jour des photos du premier logement
        $logement1->pictures()->createMany([
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-1.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-2.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-3.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-4.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-5.jpg'],
        ]);

        // Ajoutez d'autres logements et hôtes de manière similaire

         // Création du premier hôte
         $host2 = Host::create([
            'name' => 'Della
            Case',
            'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-11.jpg'
        ]);

        // Création du premier logement associé au premier hôte
        $logement2 = Logement::create([
            'title' => 'Magnifique appartement proche Canal Saint Martin',
            'description' => "Profitez du charme de la vie parisienne dans un magnifique appartement. A 3 minutes à pied du Canl Saint Martin, vous serez proche des transports, mais également de nombreux commerces. L'appartement est tout équipé, et possède également un parking pour ceux qui souhaitent se déplacer en voiture.",
            'location' => 'Ile de France - Paris 10e',
            'rating' => 2,
            'cover' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-1.jpg',
            'host_id' => $host2->id,
        ]);

        // Ajout des équipements pour le premier logement
        $equipementsLogement2 = ['Parking','Sèche Cheveux','Machine à laver','Wi-fi','Cuisine équipée','Télévision'];

        foreach ($equipementsLogement2 as $equipementName) {
            $equipement = Equipement::firstOrCreate(['name' => $equipementName]);
            $logement2->equipements()->attach($equipement->id);
        }

        // Ajout des tags pour le premier logement
        $tagsLogement2 = [ 'Canal Saint Martin','République','Appartement'];

        foreach ($tagsLogement2 as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $logement2->tags()->attach($tag->id);
        }

        // Exemple de mise à jour des photos du premier logement
        $logement2->pictures()->createMany([
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-2.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-2.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-3.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-4.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-5.jpg'],
            ['url' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-6.jpg'],


        ]);
    }
}
