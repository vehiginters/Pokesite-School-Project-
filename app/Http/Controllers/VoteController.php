<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Votes;

class VoteController extends Controller
{
    public function vote1(){
        $cur_votes=Votes::where('id',1)->pluck('votes');
        $curvotes=$cur_votes[0];
        $curvotes++;
        Votes::where('id',1)->update(array('votes'=>$curvotes));
        Auth::user()::where('id',Auth::id())->update(array('voted'=>'1'));
        return redirect('/custom')->with('success','You voted!');
    }
    public function vote2(){
      $cur_votes=Votes::where('id',2)->pluck('votes');
      $curvotes=$cur_votes[0];
      $curvotes++;
      Votes::where('id',2)->update(array('votes'=>$curvotes));
      Auth::user()::where('id',Auth::id())->update(array('voted'=>'1'));
      return redirect('/custom')->with('success','You voted!');
    }
    public function vote3(){
      $cur_votes=Votes::where('id',3)->pluck('votes');
      $curvotes=$cur_votes[0];
      $curvotes++;
      Votes::where('id',3)->update(array('votes'=>$curvotes));
      Auth::user()::where('id',Auth::id())->update(array('voted'=>'1'));
      return redirect('/custom')->with('success','You voted!');
    }
    public function vote4(){
      $cur_votes=Votes::where('id',4)->pluck('votes');
      $curvotes=$cur_votes[0];
      $curvotes++;
      Votes::where('id',4)->update(array('votes'=>$curvotes));
      Auth::user()::where('id',Auth::id())->update(array('voted'=>'1'));
      return redirect('/custom')->with('success','Thanks For Your Vote!');
    }
    public static function get_votes($ids){
      $cur_votes=Votes::where('id',$ids)->pluck('votes');
      $curvotes=$cur_votes[0];
      return $curvotes;
    }
}
