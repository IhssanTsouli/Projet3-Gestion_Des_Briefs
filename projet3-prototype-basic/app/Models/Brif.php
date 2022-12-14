<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brif extends Model
{
    use HasFactory;
    protected $table='brifs';
    protected $fillable=['id','nombrif','dateheurelivraison','dateheurerecupiration'];
    public $timestemps=true;

    public function taches(){
        
        return $this->hasMany(Tache::class);
    }
}
