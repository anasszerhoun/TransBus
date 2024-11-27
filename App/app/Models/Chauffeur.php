<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{

    use HasFactory;

    protected $primaryKey = 'idChauffeur';

    // Si 'idChauffeur' n'est pas auto-incrémenté, ajoutez cette ligne
    public $incrementing = false;

    // Si 'idChauffeur' est une chaîne (string), ajoutez cette ligne
    protected $keyType = 'string';

    protected $fillable = [
        'idChauffeur',
        'nom',
        'prenom',
        'telephone',
        'permis',
        'urlPhoto'
    ];
}
