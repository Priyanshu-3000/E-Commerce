<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    
  
    public $table = 'invoice';
    protected $fillable = [
        'Description',
        'Quantity', 
        'Rate'
        
    ];
}
