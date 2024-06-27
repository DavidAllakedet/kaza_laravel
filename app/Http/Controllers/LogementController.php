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

    // Méthode show dans votre contrôleur
    public function show($id)
    {
        $logement = Logement::with(['pictures', 'tags', 'equipements'])->find($id);
        return view('logements.show', ['logement' => $logement]);
    }
    

}