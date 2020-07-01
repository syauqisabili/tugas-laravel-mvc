<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $req){

        return view('greet',['name' => $req['firstname']]);
    }
}
