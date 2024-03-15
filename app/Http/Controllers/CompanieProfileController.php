<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanieProfileController extends Controller
{
    public function companie_profile(Request $request){

        return view('BackEnd.pages.companie.profile');
    }
}
