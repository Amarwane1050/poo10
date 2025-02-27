<!-- resources/views/games/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white p-8">
    <h1 class="text-3xl font-bold text-violet-400 mb-4">Modifier le Jeu</h1>

    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm">Nom du jeu</label>
            <input type="text" name="name" value="{{ $game->name }}" class="w-full bg-gray-700 text-white p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm">Année</label>
            <input type="number" name="year" value="{{ $game->year }}" class="w-full bg-gray-700 text-white p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm">Type</label>
            <input type="text" name="type" value="{{ $game->type }}" class="w-full bg-gray-700 text-white p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm">URL de l'image</label>
            <input type="text" name="image_url" value="{{ $game->image_url }}" class="w-full bg-gray-700 text-white p-2 rounded">
        </div>

        <button type="submit" class="bg-violet-500 hover:bg-violet-600 text-white px-4 py-2 rounded">Modifier</button>
    </form>
</div>
@endsection
