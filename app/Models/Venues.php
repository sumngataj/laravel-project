<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    protected $table = 'venues';
    protected $primaryKey = 'venue_id';
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'amenities',
        'image_path',
        'price',
    ];
}
