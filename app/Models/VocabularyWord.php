<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabularyWord extends Model
{
    use HasFactory;
    protected $table = 'vocabulary_words';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'word', 
    ];

    public function topics(){
        return $this->belongsToMany(VocabularyTopic::class, 
                                    'vocabulary_topics_words', 
                                    'vocabulary_word_id', 
                                    'vocabulary_topic_id');
    }

    public function definitions(){
        return $this->belongsToMany(VocabularyDefinition::class, 
                                    'vocabulary_words_definitions', 
                                    'vocabulary_word_id', 
                                    'vocabulary_definition_id');
    }

    public function examples(){
        return $this->hasMany(VocabularyExample::class);
    }

}
