@extends('layouts.app')

@section('content')
@include('inc.messages')
<div class="mt-5 pt-3 pb-3" >
  <h2 >{{trans('custom.entries')}}</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Drifblim.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Drifblim</b></p>
      <p>{{trans('custom.votes')}}:</p>
      <p id="Drifblim_votes"><?php use App\Http\Controllers\VoteController;
echo VoteController::get_votes(1); ?></p>
      @if(Auth::check())
      @if(!Auth::user()->getvote())
      <btn class="btn btn-primary"><a href="/custom/vote1" style="color: white;">{{trans('custom.vote')}}</a></btn>
      @endif
      @endif
    </div>
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Garchomp.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Garchomp</b></p>
      <p>{{trans('custom.votes')}}:</p>
      <p id="Garchamp_votes"><?php echo VoteController::get_votes(2); ?></p>
        @if(Auth::check())
        @if(!Auth::user()->getvote())
        <btn class="btn btn-primary"><a href="/custom/vote2" style="color: white;">{{trans('custom.vote')}}</a></btn>
      @endif
      @endif
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Chandelure.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Chandelure</b></p>
      <p>{{trans('custom.votes')}}:</p>
      <p id="Chandelure_votes"><?php echo VoteController::get_votes(3); ?></p>
        @if(Auth::check())
        @if(!Auth::user()->getvote())
        <btn class="btn btn-primary"><a href="/custom/vote3" style="color: white;">{{trans('custom.vote')}}</a></btn>
      @endif
      @endif
    </div>
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Skarmory.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Skarmory</b></p>
      <p>{{trans('custom.votes')}}:</p>
      <p id="Skarmory_votes"><?php echo VoteController::get_votes(4); ?></p>
        @if(Auth::check())
        @if(!Auth::user()->getvote())
        <btn class="btn btn-primary"><a href="/custom/vote4" style="color: white;">{{trans('custom.vote')}}</a></btn>
      @endif
      @endif
    </div>
    </div>
  </div>
</div>
@endsection
