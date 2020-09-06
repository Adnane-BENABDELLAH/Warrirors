<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\Team;
use App\Post;
use App\Schedule;
use App\Highlight;
use App\Match;
use App\Leader;
use App\Roster;

class GoldenController extends Controller
{
    public function index(){
      $listplayers= Team::all();
      $listmatches= Match::all();
      return view('index', ['players'=>$listplayers, 'matches'=>$listmatches]);
    }

    public function news(){
      $listnews= Post::all();
      // $lastnews= $listnews->find(1);
      return view('news', ['news'=>$listnews]);
    }

    public function team(){
      $listleaders= Leader::all();
      $listrosters= Roster::all();
      return view('team', ['leaders'=>$listleaders, 'rosters'=>$listrosters]);
    }

    public function schedule(){
      $listmatches=Schedule::all();
      return view('schedule', ['games'=>$listmatches]);
    }

    public function about(){
      return view('about');
    }

    public function contact(){
      return view('contact');
    }

    public function highlights(){
      $listhighlights=Highlight::all();
      return view('highlights', ['highlights'=>$listhighlights]);
    }

    public function newMessage(Request $request){
      $newMsg= new Message();
      $newMsg->full_name=$request->input('name');
      $newMsg->email=$request->input('email');
      $newMsg->subject=$request->input('subject');
      $newMsg->question=$request->input('question');

      $newMsg->save();

      return redirect('contact');
    }
}
