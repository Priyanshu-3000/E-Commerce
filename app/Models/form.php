<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table = "form";
    protected $fillable = [
        'name','email', 'number','passsword', 'Gender','Qualification', 'dob','color', 'file', 'language'
    ];
}
