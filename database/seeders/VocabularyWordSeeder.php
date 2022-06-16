<?php

namespace Database\Seeders;

use App\Models\VocabularyTopic;
use App\Models\VocabularyWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class VocabularyWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vocabulary_words')->delete();
        $json = File::get("database/data/vocabulary.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            foreach ($obj->vocabulary as $vocab){
                $words_with_topics = VocabularyTopic::with(['words'])->where('topic', $obj->topic)->first();
                $array_of_words = array();
                foreach($words_with_topics->words as $w){
                    array_push($array_of_words, $w->word);
                }
                if(!in_array($vocab->word, $array_of_words)){
                    VocabularyWord::create(array(
                        'word' => $vocab->word,
                    ));
                }
                unset($array_of_words);   
            }
        }    
    }
}
