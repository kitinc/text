<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function add(Request $request){
      return view('films.film_create');
    }
    public function create(Request $request){
      $films=new Film;
      $films->film_name=$request->film_name;
      $films->film_picture=$request->film_picture;
      $films->film_number=$request->film_number;
      $films->film_price=$request->film_price;
      $films->film_time=$request->film_time;
      $films->film_length=$request->film_length;
      $films->film_content=$request->film_content;
      $films->save();
    }
}
