<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index() {
        $pokemons = \App\Models\Pokedex::all();
        return view('pokedex.index', compact('pokemons'));
    }

    public function create() {
        return view('pokedex.create');
    }

    public function store(Request $request) {
        Pokedex::create($request->all());
        return redirect()->route('pokedex.index');
    }

    public function edit($id) {
        $pokedex = Pokedex::findOrFail($id);
        return view('pokedex.edit', compact('pokedex'));
    }

    public function update(Request $request, $id) {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());
        return redirect()->route('pokedex.index');
    }

    public function destroy($id) {
        Pokedex::destroy($id);
        return redirect()->route('pokedex.index');
    }
}
