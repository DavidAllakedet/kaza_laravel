<?php

namespace App\Http\Controllers;

use App\Models\Logement; // Importation de la classe Logement
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index()
    {
        // Récupérez les logements depuis la base de données
        $logements = Logement::get();

        // Passez les logements à la vue
        return view('logements.index', compact('logements'));
    }

    public function show($id) // Ajout de l'ID pour récupérer un logement spécifique
    {
        // Récupérer le logement spécifique par son ID
        $logement = Logement::with(['tags'])->findOrFail($id);

        // Passez le logement à la vue
        return view('logements.show', compact('logement'));
    }
}
