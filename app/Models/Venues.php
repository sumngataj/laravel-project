<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'amenities',
    ];
}
