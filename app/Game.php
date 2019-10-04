<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'platform',
        'price',
        'release_date',
        'developer',
        'publisher','name',
        'system_requirements',
        'description_ru',
        'sold_keys',
        'is_preorder',
        'image_name'
    ];
}
