<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes, Prunable;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'model',
        'transmission',
        'type',
        'fuelType',
        'no_of_passengers',
        'front_view',
        'back_view',
        'left_side_view',
        'right_side_view',
        'interior_view1',
        'interior_view2',
        'interior_view3',
        'interior_view4',
        'interior_view5',
    ];
}
