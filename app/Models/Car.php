<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Table name (optional if it matches the class name in plural form)
    protected $table = 'cars';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'price',
        'images',
        'bio',
        'year',
        'oil',
        'mileage',
        'engine',
        'drive',
        'type',
        'transmission',
        'color',
        'country',
        'status',
        'vincode',
        'vin',
        'rating',
        'lot',
        'damages'
    ];

    // The attributes that should be cast to native types (e.g., JSON for images)
    protected $casts = [
        'images' => 'array',
        'price' => 'integer',
        'year' => 'integer',
        'mileage' => 'integer',
    ];

    // Relationships (e.g., with other models) can be added here
}
