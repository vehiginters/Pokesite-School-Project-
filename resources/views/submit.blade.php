@extends('layouts.app')

@section('content')

<div class="text-center mt-5 pt-3 pb-3" style="background-color:#c96e79 ">
  <p class="lead">Attention! To post your own pokemon you must be <a href="/login">logged in</a></p>
</div>
@include('inc.messages')
<div class="container mt-5">
<div class="row">
  <div class="col-md-3">
  </div>
<div class="col-md-6">
  {!! Form::open(['url' => 'submit/submit', 'files' => true])!!}
  <div class="form-group">
    {{Form::label('pokemon_name', 'Pokemon name')}}
    {{Form::text('pokemon_name','',['class'=>'form-control', 'placeholder'=>'Enter Pokemon name'])}}
  </div>
  <div class="form-group">
    {{Form::label('pokemon_description', 'Pokemon description')}}
    {{Form::textarea('pokemon_description','',['class'=>'form-control', 'placeholder'=>'Pokemon description'])}}
  </div>
  <div class="form-group">
    {{Form::label('poke_image','Pokemon image')}}
    {{Form::file('poke_image'),['class'=>'form-control-file']}}
  </div>
  <div class="text-center">
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  </div>
  {!! Form::close() !!}
</div>
<div class="col-md-3">
</div>
</div>
</div>
<form>
  <div class="form-group text-center" style="position:absolute;left:30%;">

  </div>
</form>
@endsection
