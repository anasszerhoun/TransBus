<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itineraire extends Model
{
    use HasFactory;
    protected $primaryKey = 'idItineraire';

    // Si 'idChauffeur' n'est pas auto-incrémenté, ajoutez cette ligne
    public $incrementing = false;

    // Si 'idChauffeur' est une chaîne (string), ajoutez cette ligne
    protected $keyType = 'string';
    protected $fillable = [
        'idItineraire',
        'VilleDepart',
        'VilleArrivee',
    ];
    public function voyage()
    {
        return $this->belongsTo(Voyage::class,'idItineraire');
    }
}
