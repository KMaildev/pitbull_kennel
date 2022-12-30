<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dog;
use App\Models\DogBreedGroup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dog_breed_groups = DogBreedGroup::all();
        return view('welcome', compact('dog_breed_groups'));
    }
}
