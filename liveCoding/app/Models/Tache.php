<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $table='taches';
    protected $fillable=['NomTache','DateDebut','DateFin','Description','briefs_id'];

    public function brief(){
        return $this->belongsTo(Brief::class);
    }
}
