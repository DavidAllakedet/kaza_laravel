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
        $logement = Logement::find($id);
        if (!$logement) {
            abort(404); // Ou tout autre gestion d'erreur appropriée
        }
        return view('logements.show', ['logement' => $logement]);
    }
    

}
