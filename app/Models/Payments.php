<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    protected $fillable = [
        'fullname',
        'address',
        'mobile_number',
        'email',
        'account_number',
        'bank_details',
        'bankReceipt',
        'gcash',
        'gcashReceipt',
    ];
}
