<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestsQuestion extends Model
{
    protected $table = 'tests_questions';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'question', 
        'answer'
    ];

    public function topic(){
        return $this->belongsTo(TestsTopic::class);
    }

    public function options(){
        return $this->hasMany(TestsOption::class);
    }
}
