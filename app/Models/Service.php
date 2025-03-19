<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_type',
        'service_description',
        'service_price',
        'stock'
    ];
    protected $foreign = [

    ];
}
