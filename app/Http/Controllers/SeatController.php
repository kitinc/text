<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Seat;
class SeatController extends Controller
{
    public function seats(Request $request){
      $items = Seat::all();
      return view('seats.seat',['items' => $items]);
    }

}
