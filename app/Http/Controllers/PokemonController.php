<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Custom;


class PokemonController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'pokemon_name'=>'required',
        'poke_image'=>'required|image'

      ]);


      $poke_entry=new Custom;
      $poke_entry->pokemon_name=$request->input('pokemon_name');
      $poke_entry->pokemon_description=$request->input('pokemon_description');
      $poke_entry->user_id=Auth::id();
      $poke_entry->save();

      return redirect('/')->with('success','Pokemon uploaded');
    }
    public function getsubmit(){
        $pokemons=Custom::all();
        return view('submissions')->with('pokemons',$pokemons);
    }
}
