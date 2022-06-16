<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\VocabularyWord;
use App\Models\VocabularyDefinition;
use App\Models\VocabularyTopic;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('vocabulary_words_definitions')->delete();
        $json = File::get("database/data/vocabulary.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            foreach ($obj->vocabulary as $vocab){
                $topic = VocabularyTopic::where('topic', $obj->topic)->first();
                $word = VocabularyWord::where('word', $vocab->word)->first();
                $definitionId = VocabularyDefinition::where('definition', $vocab->definition)->first()->id;
                $topic->words()->attach($word->id);
                $word->definitions()->attach($definitionId);
            }
        }

    }
}
