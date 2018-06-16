<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'pokemon_name'=>'required',
        'poke_image'=>'required'
      ]);
      return 'Success!';

    }
}
