<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrammarFormula extends Model
{

    protected $table = 'grammar_formulas';
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
