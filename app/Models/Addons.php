<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addons extends Model
{
    protected $table = 'addons';
    protected $primaryKey = 'addons_id';
    protected $fillable = [
        'name',
        'category',
        'capacity',
        'description',
        'price',
    ];
}
