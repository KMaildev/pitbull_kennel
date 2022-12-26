<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function show($id)
    {
        $dog = Dog::findOrFail($id);
        return view('frontend.dog.show', compact('dog'));
    }
}
