<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    public function owaner_profile(Request $request){

        $data=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')
        ->leftJoin('roles','users.role_id','=','roles.id')->where('users.id','=',$request->header('id'))->get();

        return view('BackEnd.pages.admin.profile',compact('data'));
    }

    public function admin_profile(Request $request){

        $data=DB::table('users')->join('user_profiles','users.id','=','user_profiles.user_id')->where('users.id','=',$request->header('id'))->get();
        return view('BackEnd.pages.admin.profile',compact('data'));
    }
    public function owaner_update(){
        return view('BackEnd.pages.admin.update_profile');
    }
    public function profileUpdateCore(Request $request){
        $this->validate($request, [
            "userName"=> "required",
            "fistName"=> "required",
            "lastName"=> "required",
            "userImage"=> "required|image"
                ]);

                if($request->hasFile("userImage")){
                    $file = $request->file("userImage");
                    $filename = 'image_'.md5((uniqid())).time().'.'.$file->getClientOriginalExtension();
                     $file->move(public_path('assets/upload'), $filename);

                }

            UserProfile::create([
                "userName"=>$request->userName,
                "fastName"=>$request->fistName,
                "lastName"=>$request->lastName,
                "userImage"=>$filename,
                "user_id"=>$request->header("id")
            ]);
            return redirect('/profile')->with('success', ' Created Successfully');
    }
}
