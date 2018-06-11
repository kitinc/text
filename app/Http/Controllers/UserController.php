<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Ticket;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }

  public function user_login (Request $request)
  {
    return view('users.user_login',$param);
  }
  public function users (Request $request)
  { $user_name=$request->user_name;
    $user = User::where('user_name', $user_name)->first();
    $item = User::find(2);
    return view('users.user',['item' => $item,'user'=>$user]);
  }

public function create(Request $request){
  $users=new User;
  $users->user_name=$request->user_name;
  $users->password=Hash::make($request->password);
  $users->user_mail=$request->user_mail;
  $users->user_phone=$request->user_phone;
  $users->user_gender=$request->user_gender;
  $users->user_birth=$request->user_birth;
  $users->save();
  return redirect('/user_login');
}



public function getid(Request $request){
dd(Auth::check());
exit;
$user_name=$request->user_name;
$user = User::where('user_name', $user_name)->first();
$items  = User::find($request->id);
return view('users.user_edit',['items' => $items,'user'=>$user]);
}


public function postid(Request $request){
$users  = User::find($request->id);
$users->user_name=$request->user_name;
$users->password=$request->password;
$users->user_mail=$request->user_mail;
$users->user_phone=$request->user_phone;
$users->user_gender=$request->user_gender;
$users->user_birth=$request->user_birth;
$users->save();
return view('users.success');
}





//SEARCH
public function search(Request $request){
  User::find($request);
  return redirect('/user');
}

public function user_ticket(Request $request){
  $user_name=$request->user_name;
  $user = User::where('user_name', $user_name)->first();
  $items = User::find($request->id)->tickets()->get();
  $item = Ticket::all();
  // $items=Ticket::where('user_id','=',$request->user_id)->get();
  return view('users.user_ticket',['item'=>$item,'items' => $items,'user'=>$user]);
}





}
