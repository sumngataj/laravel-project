<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $primaryKey = 'reservation_id';

    protected $fillable = [
        'user_id',
        'venue_id',
        'package_id',
        'reservation_date',
        'add_ons',
        'status',
        'price',
        'guests',
        'first_name',
        'last_name',
        'phone',
        'mobile_number',
        'email',
        'address',
        'venue_name',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venues::class, 'venue_id');
    }

    public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }

}
