<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreuserRequest;

class UserController extends Controller
{

    //
    public function store(StoreuserRequest $request){ 
        $usuario=User::create([
            "name"=>$request->name;
            "email"=>$request->email;
            "password"=>$request->password;  
        ]);

        return redirect()->router('editar.usuario',['id'->$usuario->id]);
    }
    public function edit(string){
        
    }

}
