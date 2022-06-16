<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VocabularyExample extends Model
{
    protected $table = 'vocabulary_examples';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'example', 
    ];

    public function word(){
        return $this->belongsTo(VocabularyWord::class);
    }
}
