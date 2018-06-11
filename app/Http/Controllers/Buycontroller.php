<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Film;
use App\Ticket;
use App\Campaign;
use App\User;
use App\Seat;
use App\Status;
use Illuminate\Http\Request;
class Buycontroller extends Controller
{
    public function buy(Request $request){
      $user=Auth::guard()->user();
      $user=User::find(2);
      $film=Film::find(1);
      $seat=Seat::find(1);
      $campaign=Campaign::all();
      $status=Status::all();
      return view('users.user_buy',['status'=>$status,'user'=>$user,'film'=>$film,'campaign'=>$campaign,'seat'=>$seat]);
    }
    public function history(Request $request){
      $users = Auth::user();
      dd(Auth::user());
      exit;
      $user_name=$request->user_name;
      $user = User::where('user_name', $user_name)->first();
      $history=User::find(2)->tickets()->get();
      return view('users.user_history',['history'=>$history,'user'=>$user,'users'=>$users]);
    }
    public function password_change(Request $request){
      $user_name=$request->user_name;
      $user = User::where('user_name', $user_name)->first();
      return view('users.user_password',['user'=>$user]) ;
    }
    public function gotobuy(Request $request){
      $tickets=new Ticket;
      $tickets->user_id=$request->user_id;
      $tickets->film_id=$request->film_id;
      $tickets->seat_id=$request->seat_id;
      $tickets->campaign_id=$request->campaign_id;
      $tickets->status_id=$request->status_id;
      $tickets->save();
      return redirect('/user_login');
    }
}
