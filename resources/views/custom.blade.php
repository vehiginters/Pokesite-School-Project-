@extends('layouts.app')

@section('content')
<div class="mt-5 pt-3 pb-3" >
  <h2 >The Custom Pokedex entries</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Drifblim.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Drifblim</b></p>
      <p>Votes:</p>
      <p id="Drifblim_votes">0</p>
      <button class="btn btn-sm btn-primary btn-block" type="submit">Vote!</button>
    </div>
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Garchomp.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Garchomp</b></p>
      <p>Votes:</p>
      <p id="Garchomp_votes">0</p>
      <button class="btn btn-sm btn-primary btn-block" type="submit">Vote!</button>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Chandelure.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Chandelure</b></p>
      <p>Votes:</p>
      <p id="Chandelure_votes">0</p>
      <button class="btn btn-sm btn-primary btn-block" type="submit">Vote!</button>
    </div>
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-3 pt-3 pl-5 pr-3 pb-3 ml-5 text-center">
      <img src="/img/Skarmory.png" class="imgs boxy"></img>
      <div class="text-center ml-5">
      <p class="lead"><b>Skarmory</b></p>
      <p>Votes:</p>
      <p id="Skarmory_votes">0</p>
      <button class="btn btn-sm btn-primary btn-block" type="submit">Vote!</button>
    </div>
    </div>
  </div>
</div>
@endsection
