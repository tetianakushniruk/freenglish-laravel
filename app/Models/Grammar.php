<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grammar extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $attributes = [
        'topic',
        'explanation',
        'examples',
        'formation',
        'formula'
    ];
}
