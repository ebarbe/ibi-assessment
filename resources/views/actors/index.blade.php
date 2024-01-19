@extends('_layouts.app')

@section('content')
    <div class="container mx-auto my-4">
        <h1 class="text-2xl font-semibold mb-2">Actors</h1>
        <x-search-form route="actors.index" />
        <div class="flex flex-wrap justify-center">
            @foreach($actors as $actor)
                <x-card :title="$actor->name" :items="$actor->movies" />
            @endforeach
        </div>
    </div>
@endsection

