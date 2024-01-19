<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorsController extends Controller
{
    public function index()
    {
        request()->validate([
            'search' => 'nullable|string',
        ]);

        $actors = Actor::with('movies');

        if (request()->filled('search')) {
            $actors->where('name', 'like', '%' . request('search') . '%');
        }

        return view('actors.index', [
            'actors' => $actors->get(),
        ]);
    }
}
