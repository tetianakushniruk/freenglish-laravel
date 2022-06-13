<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrammarFormation extends Model
{

    protected $table = 'grammar_formations';
    public $timestamps = false;
    
    protected $fillable = [
        'affirmative', 
        'negative',
        'question'
    ];

    public function section(){
        return $this->belongsTo(GrammarSection::class);
    }
}
