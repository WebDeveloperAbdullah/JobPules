<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function companieList(){
        $data = User::where('adminLavel','companie')->get();
        return view('BackEnd.pages.companie.dashboard' ,compact('data'));
    }
}
