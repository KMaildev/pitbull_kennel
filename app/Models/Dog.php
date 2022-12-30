<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    public function dog_breed_group_table()
    {
        return $this->belongsTo(DogBreedGroup::class, 'dog_breed_group_id', 'id');
    }
}
