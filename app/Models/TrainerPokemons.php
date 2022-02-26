<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerPokemons extends Model
{
    use HasFactory;

    protected $table = 'trainer_pokemons';

    public $timestamps = false;

    protected $fillable = [
        'trainer_id',
        'pokemon_id',
    ];
    
}
