<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestsOption extends Model
{
    protected $table = 'tests_options';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'option'
    ];

    public function quiestion(){
        return $this->belongsTo(TestsQuestion::class);
    }
}
