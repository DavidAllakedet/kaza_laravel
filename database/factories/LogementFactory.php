<?php

namespace Database\Factories;

use App\Models\Logement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logement>
 */
class LogemetFactory extends Factory
{
    /**
     * Le nom du modèle associé.
     *
     * @var string
     */
    protected $model = Logement::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $title,
            // Génère un slug à partir du titre
            'slug' => Str::slug($title),
            // Génère un extrait du contenu, limité à 150 caractères
            'excerpt' => Str::limit($content, 150),
            'content' => $content,
            // Génère une URL d'image aléatoire pour la miniature
            'thumbnail' => fake()->imageUrl,
            // Définit les champs created_at et updated_at avec la même date aléatoire
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}

