<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestsTopic extends Model
{
    protected $table = 'tests_topics';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'topic', 
    ];

    public function questions(){
        return $this->hasMany(TestsQuestion::class);
    }
}
