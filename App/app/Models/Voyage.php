<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'DateDepart',
        'HeureDepart',
        'HeureDArrivee',
        'Prix',
        'idBus',
        'idChauffeur',
        'idItineraire',
    ];


    public function itineraire()
    {
        return $this->hasOne(Itineraire::class,'idItineraire');
    }
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
