<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'location', 'rating', 'cover', 'host_id', ];

    protected $casts = [
        'pictures' => 'array',
        'host' => 'array',
    ];


    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'equipement_logement');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_logement');
    }

    public function host()
    {
        return $this->belongsTo(Host::class);
    }
}
