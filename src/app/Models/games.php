<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    protected $fillable = [
        'name',
        'image(url)',
        'year',
        'type',
    ];
}
