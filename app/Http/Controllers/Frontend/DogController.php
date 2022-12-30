<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{

    public function index()
    {
        $dogs = Dog::query();
        if (request('q')) {
            $dogs->where('name', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('breed', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('sex', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('color', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('date_of_birth', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('breeder', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('owner', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('reg_no', 'Like', '%' . request('q') . '%');
            $dogs->orWhere('registrar', 'Like', '%' . request('q') . '%');
        }
        $dogs = $dogs->orderBy('id', 'ASC')->paginate(50);
        return view('frontend.dog.index', compact('dogs'));
    }

    public function show($id)
    {
        $dog = Dog::findOrFail($id);
        $dog_breed_group_id = $dog->dog_breed_group_id;
        $dog_breed_groups_relates = Dog::where('dog_breed_group_id', $dog_breed_group_id)->get();
        return view('frontend.dog.show', compact('dog', 'dog_breed_groups_relates'));
    }
}
