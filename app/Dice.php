<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dice extends Model
{
    protected $fillable = [
        'name',
        'size',
        'material',
        'description',
        'price',
    ];
}
