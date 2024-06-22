<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    // Définir les relations
    public function logements()
    {
        return $this->hasMany(Logement::class);
    }
}
