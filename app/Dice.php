<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dice extends Model
{
    protected $table = 'dice';
    protected $fillable = [
        'name',
        'size',
        'material',
        'description',
        'price',
    ];
}
