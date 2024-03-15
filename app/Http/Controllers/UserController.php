<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use App\Models\Role;
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
  $request->session()->put('token', $token);

    $data=User::where('id',$count->id)->get();
    foreach ($data as $key => $value) {
        $role_id=$value->role_id;

    }
    if($role_id==1){
        return redirect('/dashboard_owner')->with('success','Welcome Admin Panal As A Website Owner !')->cookie('token',$token,time()+60*24*30);
    }elseif($role_id==2){
        return redirect('/dashboard_admin')->with('success','Welcome Admin Panal As A Website Admin !')->cookie('token',$token,time()+60*24*30);
    }elseif($role_id==3){
        return redirect('/dashboard_companie')->with('success','Welcome Admin Panal As A  Companie  !')->cookie('token',$token,time()+60*24*30);
    }elseif($role_id==4){
        return redirect('/dashboard_employe')->with('success','Welcome Admin Panal As A Companie Employe !')->cookie('token',$token,time()+60*24*30);
    }elseif($role_id==5){
        return redirect('/dashboard_candidete')->with('success','Welcome Admin Panal As A Companie Candidete !')->cookie('token',$token,time()+60*24*30);
    }

   }else{
    return back()->with('error',' Email And Password invalid!');
   }
}


function logOut(){
        return redirect('/login')->cookie('token','',-1);
    }


    public function admin_list(Request $request){
        $id=$request->header('id');
        $data=User::where('id',$id)->get();
    foreach ($data as $key => $value) {
        $role_id=$value->role_id;

    }
        $datas=User::paginate(4);

        return view('BackEnd.pages.admin.admin_list',compact('datas'))->with('role_id',$role_id);
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
 $data=Role::all();

    $dataRole=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();
    foreach ($dataRole as $key => $value) {
        $name=$value->name;

    }

    return view('BackEnd.pages.admin.admin_edit_page',compact('data','dataRole'))->with('name',$name)->with('id',$id);
}

public function search(Request $request){
    $this->validate($request, [
        "search"=> "required"
    ]);
    $id=$request->header('id');
    $data=User::where('id',$id)->get();
foreach ($data as $key => $value) {
    $role_id=$value->role_id;

}
    $search=$request->search;
    $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.email','LIKE', "%" .$search."%")->paginate(4);

    return view('BackEnd.pages.admin.admin_list',compact('datas'))->with('role_id',$role_id);


}

public function user_update(Request $request){
    $role_id=$request->role_id;
    $id=$request->id;

    User::where('id',$id)->update(['role_id'=>$role_id]);
    return redirect('/admin_list')->with('success','Website User update Success!');


}


public function user_delete($id){
User::where('id', $id)->delete();

    return redirect('/admin_list')->with('success',' User Delete Success!');
}

 public function admin_details($id){
    $datas=DB::table('users')->leftJoin('user_profiles','users.id','=','user_profiles.user_id')->leftJoin('roles','users.role_id','=','roles.id')->where('users.id',$id)->get();

    return ;



}


}
