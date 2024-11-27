<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'idBus',
        'immatriculation',
        'nbrPlaces'];
    protected $table = 'buses';
    protected $primaryKey = 'idBus';
    public $timestamps = false;

    public function voyages()
    {
        return $this->hasMany(Voyage::class);
    }
}
