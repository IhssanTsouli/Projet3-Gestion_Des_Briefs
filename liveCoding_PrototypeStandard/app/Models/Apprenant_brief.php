<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant_brief extends Model
{
    use HasFactory;
    protected $fillable = ['apprenant_id', 'brief_id'];
}
