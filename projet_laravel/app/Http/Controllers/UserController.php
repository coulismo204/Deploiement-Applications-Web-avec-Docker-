<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $data = $request->validate([
            "name" => "required"|"string",
            "email" => ["required", "email", "unique:users"],
            "password" => "required"|"string"|"min:5",
        ]);
        $insert = User::create($data);

        return response([
            "code" => 200,
            "message" => "Utilisateur inscrit avec succès !"
        ]);
    }
    public function login(Request $request){
        $login = $request->validate([
            "email" => "required|email",
            "password" => "required|string"
        ]);

        if(!Auth::attempt($login)){
            return response([
                "code" => 400,
                "message" => "FAILURE",
                "description" => "Vos identifiants sont incorrectes"
            ]);
        }else{
            return response([
                "code" => 200,
                "message" => "SUCCES",
                "description" => "connexion effectuer avec succes",
                "token" => auth()->user()->createToken("secret")->plainTextToken
            ]);
        }
    }

    public function formulaire(){
        return view('register');
    }
    public function connexion(){
        return view('login');
    }
}
