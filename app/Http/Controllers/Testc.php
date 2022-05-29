<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Testc extends Controller
{
  public function my_registration(){

         return view('reg');

  }
  public function reg_ins(Request $r){

    $n=$r->name;
    $e=$r->email;
    $p= bcrypt($r->password);

    $obj=new user();
    $obj->name=$n;
    $obj->email=$e;
    $obj->role=$r->role;
    $obj->password=$p;
    $obj->save();

  }
  public function my_login(){
     return view('mylogin');
  }
  public function lc(Request $r){
    $e=$r->email;
    $p= $r->password;

    $w=array(
        'email'=>$e,
        'password'=>$p

    );

    if(Auth::attempt($w)){
      
      return redirect(url('/ckrole'));
    }else{
      echo "Invalid email/password";
    }

  }
  public function secureadmin(){

    $u=Auth::user();
    $w=array(
      'uu'=>$u

    );
    return view('secure')->with($w);
  }

   public function securecustomer(){

    $u=Auth::user();
    $w=array(
      'uu'=>$u

    );
    return view('secure')->with($w);
  }

  public function ckrole(){
    if(Auth::user()->role=="Admin"){
return redirect(url('/secureadmin'));
    }else{
      return redirect(url('/securecustomer'));

    }
  }

  public function my_logout(){
    Auth::logout();
    return redirect(url('/my_login'));
  }
  public function dash_admin(){
    return view('admin_dashboard');
  }
}
