<?php

namespace App\Http\Controllers;

use App\Models\games;
use Illuminate\Http\Request;

class gamecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = games::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'year' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        games::create($request->all());

        return redirect()->route('games.index')->with('success', 'Jeu ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = games::findOrFail($id);
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = games::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|integer',
            'type' => 'required|string|max:255',
            'image_url' => 'nullable|string|max:255',
        ]);

        $game = games::findOrFail($id);
        $game->update($request->all());

        return redirect()->route('games.index')->with('success', 'Jeu mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = games::findOrFail($id);
        $game->delete();

        return redirect()->route('games.index')->with('success', 'Jeu supprimé avec succès');
    }
    
}
