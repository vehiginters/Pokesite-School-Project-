@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1>Welcome to The Custom Pokedex</h1>
        <p class="lead">It's a gallery of custom Pokemon</p>
    </div>
</div>
<div class="row">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-6">
  <img class="centered" src="/img/pokedex.png" width="300" height="300" alt="pokedex"/>
</div>
  <div class="col-lg-4">
  </div>
</div>
<div class="jumbotron text-center mt-4" >
  <p>If you are new to the page please <a href="/register">Register here</a></p>
  <p>Or if you already have an account <a href="/login">Login here</a></p>
</div>
<div>
  <p>This site is a <b>Laravel</b> project made for learning porpuses</p>
  <p>Made by University of Latvia first course student <b>Ginters Juris Vehi</b></p>
</div>
@endsection

@section('sidebar')
  @parent
  <p>Appended to sidebar</p>
@endsection
