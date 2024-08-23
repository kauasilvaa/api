<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalityModels extends Model
{
    use HasFactory;

    protected $table = "locality";

    protected $fillable = [
        'road',
        'neighborhood',
        'number',
        'cep',
        'city',
        'state',
        'country',  
    ];

}
