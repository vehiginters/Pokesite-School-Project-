@extends('layouts.app')

@section('content')

@if(auth::guest())
<div class="text-center mt-5 pt-3 pb-3" style="background-color:#c96e79 ">
  <p class="lead">{{trans('submit.attention')}}<a href="/login">{{trans('submit.logged')}}</a></p>
</div>
@endif
@include('inc.messages')
@if(Auth::check())
<div class="container mt-5">
<div class="row">
  <div class="col-md-3">
  </div>
<div class="col-md-6">
  {!! Form::open(['url' => 'submit/submit', 'files' => true])!!}
  <div class="form-group">
    {{Form::label('pokemon_name', trans('submit.poke-name-l'))}}
    {{Form::text('pokemon_name','',['class'=>'form-control', 'placeholder'=>trans('submit.poke-name-p')])}}
  </div>
  <div class="form-group">
    {{Form::label('pokemon_description', trans('submit.poke-desc-l'))}}
    {{Form::textarea('pokemon_description','',['class'=>'form-control', 'placeholder'=>trans('submit.poke-desc-p')])}}
  </div>
  <div class="form-group">
    {{Form::label('poke_image',trans('submit.poke-img'))}}
    {{Form::file('poke_image'),['class'=>'form-control-file']}}
  </div>

  <div class="text-center">
    {{Form::submit(trans('submit.submit'),['class'=>'btn btn-primary'])}}
  </div>
  {!! Form::close() !!}
</div>
<div class="col-md-3">
</div>
</div>
</div>
@endif
@endsection
