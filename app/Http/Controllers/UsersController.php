<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Trainer;
use phpDocumentor\Reflection\Types\Null_;
use App\Services\UserService;
use App\Models\Pokemon;
class UsersController extends Controller
{
    public function getProfile(Request $request){
        $username = $request->input()['username'];
        $trainer = Trainer::all()->where('username', '=', $username)->first();
        // If trainer exists
        if ($trainer){
            $pokemons = $trainer->pokemons;
            $pokemons = UserService::getTrainerPokemonsInfo($pokemons);
            return view('logado', compact('trainer', 'pokemons'));
        }
        return view('naoLogado', compact('username'));
    }

    public function registerProfile(Request $request){
        $username = $request->input()['username'];
        $trainer = Trainer::all()->where('username', '=', $username)->first();
        // If the trainer doesn't exist
        if (!$trainer){
            $region = $request->input()['region'];
            $age = $request->input()['age'];
            $gender = $request->input()['gender'];
            DB::table('trainers')->insert([
                'username' => $username,
                'region' => $region,
                'age' => $age,
                'gender' => $gender,
            ]);
        }
        else{
            return 'Este usuário já existe';
        }
        return redirect('/home');
    }

    public function pokemonMenu(Request $request){
        $username = $request->input()['username'];
        $page = $request->input()['page'];
        if ($page < 1){
            $page = (DB::table('pokemons')->count() / 15);
        }
        else if($page > DB::table('pokemons')->count() / 15){
            $page = 1;
        }
        $pokemons = DB::table('pokemons')
                    ->where(function($query) use($page){
                        $query->where('id', '<', $page * 15)
                              ->where('id', '>', ($page - 1) * 15);
                    })->get();
        return view('pokemonMenu', compact('username', 'pokemons', 'page'));
    }
}
