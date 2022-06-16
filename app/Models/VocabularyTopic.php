<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabularyTopic extends Model
{
    protected $table = 'vocabulary_topics';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'topic', 
    ];

    public function words(){
        return $this->belongsToMany(VocabularyWord::class, 
                                    'vocabulary_topics_words', 
                                    'vocabulary_topic_id', 
                                    'vocabulary_word_id');
    }
}
