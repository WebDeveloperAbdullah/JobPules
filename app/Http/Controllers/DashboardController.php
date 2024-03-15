<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function loginPage(Request $request){

            return view('BackEnd.pages.auth.login');

    }

    public function create_admin(Request $request){
        $data = Role::all();
        return view('BackEnd.pages.admin.create_admin' ,compact('data'));

    }

    public function dashboard_owner(Request $request){
        $id=$request->header('id');
        $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();

        foreach ($datas as $key => $value) {
            $role_id=$value->role_id;

        }
            return view('BackEnd.pages.admin.dashboard_owanr' ,compact('datas'))->with('role_id',$role_id);

            }

            public function dashboard_admin(Request $request){

              $id=$request->header('id');
              $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();
             return view('BackEnd.pages.admin.dashboard_owanr' ,compact('datas'));
            }

            public function dashboard_companie(Request $request){

                $id=$request->header('id');
                $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();
               return view('BackEnd.pages.companie.dashboard_companie' ,compact('datas'));
              }

            public function dashboard_employe(Request $request){

                $id=$request->header('id');
                $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();
               return view('BackEnd.pages.employe.dashboard_employe' ,compact('datas'));
              }

            public function dashboard_candidete(Request $request){

                $id=$request->header('id');
                $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();
               return view('BackEnd.pages.admin.dashboard_candidete' ,compact('datas'));
              }

    }




