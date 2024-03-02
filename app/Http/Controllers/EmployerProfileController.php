<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerProfileController extends Controller
{
    public function employeProfile(){
        return view('BackEnd.pages.employe.profile');

    }
}
