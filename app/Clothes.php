<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    protected $fillable = [
        'name',
        'size',
        'brand',
        'type',
        'description',
        'price',
    ];
}