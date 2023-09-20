<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'package_id';
    protected $fillable = [
        'package_name',
        'description',
        'price',
    ];
}
