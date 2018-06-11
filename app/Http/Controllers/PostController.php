<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class PostController extends Controller
{
    public function index(Request $request){
      $items = User::all();
      return view('post',['items' => $items]);
    }
    public function post(Request $request){
      $items = User::all();
      return view('goto');
    }
}
