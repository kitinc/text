<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ticket;
use App\User;
use App\Film;
use App\Seat;
use App\Campaign;
use App\Status;
class TicketController extends Controller
{
  public function tickets (Request $request)
  { $items = Ticket::find('2');
    $item =Ticket::all();
    $status=Status::all();
    $rows=array('A','B','C','D');
    $cols=array('1','2','3','4','5');
    // $items = Ticket::find($request->id);
    return view('tickets.ticket',['items' => $items,'status'=>$status,'item'=>$item,'cols'=>$cols,'rows'=>$rows]);
  }
}
