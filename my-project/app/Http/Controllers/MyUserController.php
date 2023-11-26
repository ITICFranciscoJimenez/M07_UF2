<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUserController extends Controller
{
    //
    public function createUser($name,$surname,$email,$password){
        return "$name $surname $email $password";
    }
}
