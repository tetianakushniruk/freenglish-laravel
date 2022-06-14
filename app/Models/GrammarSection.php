<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrammarSection extends Model
{

    protected $table = 'grammar_sections';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'topic', 
        'explanation'
    ];

    public function examples(){
        return $this->hasMany(GrammarExample::class);
    }

    public function formations(){
        return $this->hasMany(GrammarFormation::class);
    }

    public function formulas(){
        return $this->hasMany(GrammarFormula::class);
    }

}
