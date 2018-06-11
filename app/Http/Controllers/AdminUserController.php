<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Ticket;
class AdminUserController extends Controller
{
  public function admim_userticket(Request $request){
    $user_name=$request->user_name;
    $user = User::where('user_name', $user_name)->first();
    $items = User::find($request->id)->tickets()->get();
    $item = Ticket::all();
    // $items=Ticket::where('user_id','=',$request->user_id)->get();
    return view('admins.user_ticket',['item'=>$item,'items' => $items,'user'=>$user]);
  }

  public function admin_login (Request $request)
  { $item=User::all();
    return view('admins.user',['item'=>$item]);
  }
  public function showCreate(Request $request){
    return view('admins.user_create');
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
    return redirect('admin');
  }
  public function getid(Request $request){
  $items  = User::find($request->id);
  return view('admins.user_edit',['items' => $items]);
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
  return redirect('admin');
  }
  public function delete(Request $request){
    User::find($request->id)->delete();
    return redirect('admin');
  }
}
