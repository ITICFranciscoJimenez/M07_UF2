<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function checkUser(Request $request) {
        $email = "admin@gmail.com";
        $password = "hola123";

        $postedEmail = $request->input('email');
        $postedPass = $request->input('password');

        if ($postedEmail == $email && $postedPass == $password) {
            return view('Admin.admin');
        } else {
            return redirect()->route('signin');
        }
    }

    public function showSchools() {
        $schools = [
            [
                1,
                "Institut TIC de Barcelona",
                "C/ de Sancho de Ávila, 133",
                "08018",
                "Barcelona"
            ],[
                2,
                "INS Joan D'Austria",
                "C/ de la Selva de Mar, 211",
                "08020",
                "Barcelona"
            ]
        ];
        return view('Admin.list')->with(['typeList'=>'CENTRES','schools'=>$schools]);
    }

    public function showTeachers() {
        $typeList = 'PROFESSORAT';
        $teachers = [
            [
                'id' => 1,
                'name'=>'Roger',
                'surname'=>'Sobrino',
                'role'=>'Professor',
                'email'=>'roger@roger.com'
            ],[
                'id' => 2,
                'name'=>'Moisés',
                'surname'=>'Gómez',
                'role'=>'Professor',
                'email'=>'moises@moises.com'
            ],[
                'id' => 3,
                'name'=>'Marta',
                'surname'=>'Millan',
                'role'=>'Professora',
                'email'=>'marta@marta.com'
            ]
        ];
        return view('Admin.list')->with(['typeList'=>$typeList,'teachers'=>$teachers]);
    }

    public function showStudents() {
        $typeList = "ALUMNAT";
        $students = [
            [
                'id' => 1,
                'name'=>'Francisco',
                'surname'=>'Jiménez',
                'role'=>'Alumne',
                'email'=>'francisco@francisco.com'
            ],[
                'id' => 2,
                'name'=>'Carles',
                'surname'=>'Canals',
                'role'=>'Alumne',
                'email'=>'carles@carles.com'
            ],[
                'id' => 3,
                'name'=>'Marina',
                'surname'=>'Miró',
                'role'=>'Alumne',
                'email'=>'marina@marina.com'
            ]
        ];
        return view('Admin.list')->with(['typeList'=>$typeList,'students'=>$students]);
    }
}