@extends('_layouts.app')

@section('content')  
    <div class="container mx-auto my-4">
        <h1 class="text-2xl font-semibold mb-2">Star Wars People</h1>
        <x-search-form route="star-wars.people" />
        <div class="flex flex-wrap justify-center">
            @foreach($people as $person)
                <x-card :title="$person['name']" />
            @endforeach
        </div>
    </div>
@endsection

