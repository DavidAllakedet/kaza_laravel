<?php

// namespace Database\Factories;

// use App\Models\Logement;
// use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;

// class LogementFactory extends Factory
// {
//     protected $model = Logement::class;

//     public function definition()
//     {
//         $faker = $this->faker;

//         // Générer un nombre aléatoire entre 1 et 5 pour le nombre d'images
//         $numPictures = $faker->numberBetween(1, 5);

//         // Générer un tableau d'images avec un nombre aléatoire d'éléments
//         $pictures = [];
//         for ($i = 0; $i < $numPictures; $i++) {
//             $pictures[] = $faker->imageUrl();
//         }

//         return [
//             'title' => $faker->sentence(3),
//             'description' => $faker->paragraph(4),
//             'location' => $faker->city,
//             'rating' => $faker->numberBetween(1, 5),
//             'cover' => $faker->imageUrl(),
//             'pictures' => json_encode($pictures), // Convertir le tableau en JSON pour la sauvegarde
//             'created_at' => now(),
//             'updated_at' => now(),
//         ];
//     }
// }
