<?php

namespace App\Http\Controllers;
use App\Dog;
use App\Breed;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $dogList = Dog::all();

        $breed = Breed::find(1);
        $goldies = $breed->dogs;

        $results = Breed::where('name','Poodles')->value('id');
        $names = Dog::pluck('name');
        $breedNames = Breed::pluck('name');

        $labradorRetrievers = Dog::where('breed_id', '=', 1)->orWhere('breed_id', '=', 3)->get();
        $retrievers = Dog::where('breed_id', '=', 3)->get();
        $oldDogs = Dog::where('date_of_birth', '<', '2010-1-1')->get();
        $dogQuery = Dog::where('breed_id', '!=', 1)->where('breed_id', '!=', 3)->orderBy('breed_id')->get();

        return view('home', compact('dogList', 'breed', 'labradorRetrievers', 'breedNames', 'retrievers', 'oldDogs', 'dogQuery'));
    }
}
