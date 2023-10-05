<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $table = 'packages';

    protected $primaryKey = 'package_id';

    protected $fillable = [
        'package_name',
        'venue_id',
        'description',
        'price',
        'image_path',
    ];

    public function venue()
    {
        return $this->belongsTo(Venues::class, 'venue_id');
    }
}
