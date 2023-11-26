<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function signin($text1="",$text2="",$text3="",$text4="") {
        $title = "$text1 $text2 $text3 $text4";
        if ($title == "   ") {
            return view("signin")->with("titulo","Iniciar sessió de l'usuari");
        }
        return view("signin")->with("titulo",$title);
    }

    public function signup($text1="",$text2="",$text3="") {
        $title = "$text1 $text2 $text3";
        if ($title == "  ") {
            return view("signup")->with("titulo","Creació d'usuari nou");
        }
        return view("signup")->with("titulo",$title);
    }
}
