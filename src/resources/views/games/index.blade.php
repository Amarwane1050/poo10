<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>liste de jeux</title>
</head>
<body>
 
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white p-8">
    <h1 class="text-3xl font-bold text-violet-400 mb-4">Liste des Jeux</h1>

    <a href="{{ route('games.create') }}" class="bg-violet-500 hover:bg-violet-600 text-white px-4 py-2 rounded">Ajouter un jeu</a>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mt-2 rounded">{{ session('success') }}</div>
    @endif

    <div class="mt-6">
        <table class="w-full bg-gray-800 rounded-lg overflow-hidden">
            <thead class="bg-violet-700">
                <tr>
                    <th class="p-3">Nom</th>
                    <th class="p-3">Année</th>
                    <th class="p-3">Type</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr class="border-b border-gray-700">
                    <td class="p-3">{{ $game->name }}</td>
                    <td class="p-3">{{ $game->year }}</td>
                    <td class="p-3">{{ $game->type }}</td>
                    <td class="p-3">
                        <a href="{{ route('games.show', $game->id) }}" class="text-blue-400 hover:text-blue-300">Voir</a> |
                        <a href="{{ route('games.edit', $game->id) }}" class="text-yellow-400 hover:text-yellow-300">Modifier</a> |
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
</body>
</html>