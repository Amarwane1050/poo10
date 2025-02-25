<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    protected $fillable = [
        'name',
        'year',
        'type',
        'image_url',
    ];
}
