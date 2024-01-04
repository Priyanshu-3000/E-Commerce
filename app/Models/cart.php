<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'carts';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'image', 
        'price',
        'quantity'
        
    ];
}
