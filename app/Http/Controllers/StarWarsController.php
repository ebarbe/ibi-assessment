<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StarWarsController extends Controller
{
    /**
     *  Show the Star Wars People page.
     *  @return \Illuminate\View\View
     *  @throws \Illuminate\Validation\ValidationException
     */
    public function people()
    {
        request()->validate([
            'search' => 'nullable|string',
        ]);

        if (! request()->filled('search')) {
            return view('star-wars.people', [
                'people' => [],
            ]);
        }

        try {
            $people = Http::get('https://swapi.dev/api/people', [
                'search' => request('search'),
            ])->json();
            $people = $people['results'];
        } catch (\Exception $e) {
            $people = [];
        }

        return view('star-wars.people', [
            'people' => $people,
            
        ]);
    }
}
