@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white p-8">
    <h1 class="text-3xl font-bold text-violet-400 mb-4">{{ $game->name }}</h1>

    <p class="text-gray-400"><strong>Année :</strong> {{ $game->year }}</p>
    <p class="text-gray-400"><strong>Type :</strong> {{ $game->type }}</p>

    @if($game->imges_url)
        <!-- Affiche l'image si l'URL est présente -->
        <img src="{{ $game->imges_url }}" alt="Image du jeu" class="mt-4 w-1/2">
    @else
        <!-- Si aucune image, affiche un message -->
        <p class="text-red-400">Aucune image disponible</p>
    @endif

    <a href="{{ route('games.index') }}" class="block mt-6 bg-violet-500 hover:bg-violet-600 text-white px-4 py-2 rounded">Retour</a>
</div>
@endsection