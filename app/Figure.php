<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    protected $fillable = [
        'race',
        'class',
        'material',
        'description',
        'price',
    ];
}