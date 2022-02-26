<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Trainer;
use phpDocumentor\Reflection\Types\Null_;

class UsersController extends Controller
{
    public function getProfile(string $username){
        $search = Trainer::all()->where('username', $username);
        if ($search->count() == 0){
            return view('naoLogado', compact('username'));
        }
        return view('logado', compact('username'));
    }
}
