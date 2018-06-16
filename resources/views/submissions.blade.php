@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1>Submissions</h1>
    </div>
</div>
@if(count($pokemons)>0)
@foreach($pokemons as $poke_entry)
@if($poke_entry->user_id == Auth::id())
<ul class="list-group py-4">
<li class="list-group-item my-1">Pokemon Name:{{$poke_entry->pokemon_name}}</li>
<li class="list-group-item my-1">Description:{{$poke_entry->pokemon_description}}</li>
</ul>
@endif
@endforeach
@endif
@endsection

@section('sidebar')
  @parent
  <p>Appended to sidebar</p>
@endsection
