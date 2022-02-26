<?php

namespace App\Repositories;

use app\Interfaces\pokeApiInterface;

// Functions:
function getPokemonImgUrl(int $id):string{
    $id = sprintf("%'03d", $id);
    return "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/{$id}.png";
}

class pokeApiRepository implements pokeApiInterface{
    public function getPokemonData(int $id): array
    {
        $data = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$id}");
        $data = json_decode($data);
        $name = $data->name;
        $types = $data->types;
        $arraytypes = [];
        foreach($types as $type){
            array_push($arraytypes, $type->type->name);
        }
        $imgUrl = getPokemonImgUrl($id);
        $Pokemon = [
            'name' => $name,
            'types' => $types,
            'imgUrl' => $imgUrl,
        ];
        return $Pokemon;
    }
    public function getPokemonsData(int $limit){
        $data = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit={limit}");
        return json_decode($data);
    }
}