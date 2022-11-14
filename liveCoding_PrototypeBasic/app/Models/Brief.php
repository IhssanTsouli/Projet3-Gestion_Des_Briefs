<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    protected $table='briefs';
    protected $fillable=['NomBrief','DateLivraison','DateRecuperation'];
    public function tache(){
        return $this->hasMany(Tache::class);
    }
}
