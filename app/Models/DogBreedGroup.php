<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DogBreedGroup extends Model
{
    use HasFactory;

    public function dog_tables()
    {
        return $this->hasMany(Dog::class, 'dog_breed_group_id', 'id');
    }
}
