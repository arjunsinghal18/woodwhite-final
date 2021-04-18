<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deliveryaddress extends Model
{
    use HasFactory;
    protected $table = 'deliveryaddress';
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'contact',
        'addressline1',
        'addressline2',
        'pincode',
        'state',
        'country',   
    ];
}
