<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'location', 'rating', 'cover', 'host_id'];

    public function host()
    {
        return $this->belongsTo(Host::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class);
    }


}
