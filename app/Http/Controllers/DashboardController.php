<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function loginPage(){
        return view('BackEnd.pages.auth.login');

    }
    public function create_admin(Request $request){
        $data = Role::all();
        return view('BackEnd.pages.admin.create_admin' ,compact('data'));

    }

    public function dashboard_owner(){
        return view('BackEnd.pages.admin.dashboard');
    }



    }

