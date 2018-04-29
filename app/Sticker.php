<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    protected $fillable = [
        'name',
        'artist',
        'description',
        'price',
    ];
}