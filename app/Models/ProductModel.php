<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primarykey = 'id';


    static public function getRecord(){
        $return = self::select('products.*');
        return $return;
    } 
}
