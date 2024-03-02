<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanieProfileController extends Controller
{
    public function companineProfile(Request $request){

        return view('BackEnd.pages.companie.profile');
    }
}
