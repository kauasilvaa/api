<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerModels extends Model
{
    use HasFactory;

    protected $table = "trainer";

    protected $fillable = [
        'name',
        'years',
        'height',
        'weight',
        'cpf',
        'rg',
    ];

}
