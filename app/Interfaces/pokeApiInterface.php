<?php

namespace App\Interfaces;

interface pokeApiInterface{
    public function getPokemonData(int $id);
    public function getPokemonsData(int $limit);
}