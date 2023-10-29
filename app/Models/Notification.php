<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    
    protected $table = 'notifications';

    protected $primaryKey = 'notif_id';

    protected $fillable = [
        'user_id',
        'venue_id',
        'package_id',
        'status',
        'uploaded',
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function venues()
    {
        return $this->belongsTo(Venues::class, 'venue_id');
    }

    public function packages()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
}