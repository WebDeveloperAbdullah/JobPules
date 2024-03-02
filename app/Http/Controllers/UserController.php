<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\View\View;

class UserController extends Controller
{

 public function create(Request $request){
    $this->validate($request, [
        "email"=> "required|email",
        "password"=> "required",
        'role_id'=>'required'
  ]);
    $email= $request->email;
    $role_id= $request->role_id;
    $password= $request->password;
    $encPassword=md5(sha1($email.$password));
    $user=User::where("email", $email)->first();
    if($user==0){
        User::create([
        'email'=> $email,
        'password'=>$encPassword,
        'role_id'=>$role_id
    ]);
    return redirect('/dashboard_owner')->with('success','Website User Create Success');
    }else{
     return redirect('/dashboard_owner')->with('error','Website User Create Error');

    }
 }



    public function loginCore(Request $request){
        $this->validate($request, [
            "email"=> "required|email",
            "password"=> "required"
        ]);
        $email=$request->email;
        $password=$request->password;
        $enCpassword=md5(sha1($email.$password));
        $activeUser=1;
   $count = User::where("email", $email)->where('password',$enCpassword)->where('active',$activeUser)->select('id')->first();
   if($count!==null){
    $token=JWTToken::generateToken($email,$count->id);


    return redirect('/dashboard_owner')->with('success','Welcome Admin Panal')->cookie('token',$token,time()+60*24*30);
   }else{
    return back()->with('error',' Email And Password invalid!');
   }
}


function userLogout(){
        return redirect('/login')->cookie('token','',-1);
    }


    public function admin_list(){
        $datas=User::paginate(4);

        return view('BackEnd.pages.admin.admin_list',compact('datas'));
    }


    public function otpVerifyCore(Request $request){
        $this->validate($request, [
            "email"=> "required|email",
            "otp"=> "required"
        ]);
        $email=$request->email;
        $otp=$request->otp;
        $count=User::where('email',$email)->where('otp',$otp)->select('id')->first();
        if($count!==null){
            User::where('email', $email)->update(['otp'=>'0']);
            return redirect('/setPassword')->with('email',$email);
        }else{
            return back()->with('error','Email And Otp Not Valid');
        }



}


public function admin_active($id, $active){
    if($active==1){
    User::where("id",$id)->where('active',$active)->update(['active'=>'0']);
    return back()->with("success"," DeActive Suceess ");
    }elseif($active==0){
        User::where("id",$id)->where('active',$active)->update(['active'=>'1']);
        return back()->with("success","User Active Success");
    }
}
public function admin_edit_page($id){

    $data=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();
    return view('BackEnd.pages.admin.admin_edit_page',compact("data"));
}

public function search(Request $request){
    $this->validate($request, [
        "search"=> "required"
    ]);
    $search=$request->search;
    $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.email','LIKE', "%" .$search."%")->paginate(4);

    return view('BackEnd.pages.admin.admin_list',compact('datas'));


}


}
