<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    use HasFactory;

    protected $table = 'query';
    protected $fillable = [
        'query_no',
        'user_id',
        'order_id',
        'message',
        'action',  
    ];

}
