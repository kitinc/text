<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Middleware\UserLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }
public function getAuth(Request $request)
{
  $param=['message'=>'ログインしてください'];
  return  view('users.user_login',$param);
}
  public function postAuth(Request $request)
{
  $user_name=$request->user_name;
  $passwrod=$request->password;
  // dd($request->session()->all());
  // exit;
  if(Auth::guard('user')->attempt(['user_name'=>$user_name,'password'=>$passwrod]))
  {   $user = User::where('user_name', $user_name)->first();
      return view('users.index',['user'=>$user]);
    }else{
      $param=['message'=>'ログイン失敗しました'];
      return view('users.user_login',$param);
    }
}
public function loginout(){
  Auth::logout();
  redirect('user_login');
}
}
