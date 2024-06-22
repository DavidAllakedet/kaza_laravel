<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    // Définir les relations
    public function host()
    {
        return $this->belongsTo(Host::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
