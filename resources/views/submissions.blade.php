@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1>Submissions</h1>
    </div>
</div>
@if(count($pokemons)>0)
@foreach($pokemons as $poke_entry)
<ul class="list-group">
<li class="list-group-item">Pokemon Name:{{$poke_entry->pokemon_name}}</li>
<li class="list-group-item">Description:{{$poke_entry->pokemon_description}}</li>
</ul>
@endforeach
@endif
@endsection

@section('sidebar')
  @parent
  <p>Appended to sidebar</p>
@endsection
