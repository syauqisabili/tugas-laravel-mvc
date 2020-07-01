<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $req){
        return view('greet', ['req' => $req] );
        //return view('greet',['firstname' => $req['firstname'], 'lastname' => $req['lastname'] ]);
    }
}
