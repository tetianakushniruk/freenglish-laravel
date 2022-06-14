<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabularyDefinition extends Model
{

    use HasFactory;
    protected $table = 'vocabulary_definitions';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'definition', 
    ];

    public function words(){
        return $this->belongsToMany(VocabularyWord::class, 
                                    'vocabulary_words_definitions',
                                    'vocabulary_definition_id', 
                                    'vocabulary_word_id');
    }
}
