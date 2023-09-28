<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;

    protected $table = 'venues';

    protected $primaryKey = 'venue_id';
    
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'amenities',
        'image_path',
    ];

    public function venue()
    {
        return $this->belongsTo(Venues::class, 'venue_id');
    }
}
