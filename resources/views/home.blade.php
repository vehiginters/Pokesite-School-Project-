@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1>{{trans('homepage.hello')}}</h1>
        <p class="lead">{{trans('homepage.hello-desc')}}</p>
    </div>
</div>
@include('inc.messages')
<div class="row">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-6">
  <img class="centered" src="/img/pokedex.png" width="300" height="300" alt="pokedex"/>
</div>
  <div class="col-lg-4">
  </div>
</div>
@if(Auth::guest())
<div class="jumbotron text-center mt-4" >
  <p>{{trans('homepage.new')}}<a href="/register">{{trans('homepage.register')}}</a></p>
  <p>{{trans('homepage.already')}} <a href="/login">{{trans('homepage.login')}}</a></p>
</div>
@endif
<div>
  <p>{{trans('homepage.this')}}<b>Laravel</b>{{trans('homepage.learning')}}</p>
  <p>{{trans('homepage.made-by')}} <b>Ginters Juris Vehi</b></p>
</div>
@endsection

@section('sidebar')
  @parent
  <p>Appended to sidebar</p>
@endsection
