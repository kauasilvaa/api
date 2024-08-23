<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitorModels extends Model
{
    use HasFactory;

    protected $table = "competitor";

    protected $fillable = [
        'name',
        'years',
        'height',
        'weight',
        'sex',
        'cpf',
        'rg',
        'team',
    ];

}


