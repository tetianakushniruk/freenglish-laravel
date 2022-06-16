<?php

namespace Database\Seeders;

use App\Models\VocabularyExample;
use App\Models\VocabularyWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VocabularyExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vocabulary_examples')->delete();
        $json = File::get("database/data/vocabulary.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            foreach ($obj->vocabulary as $vocab){
                VocabularyExample::create(array(
                    'example' => $vocab->example,
                    'vocabulary_word_id' => VocabularyWord::where('word', $vocab->word)->value('id')
                ));
            }
        }
    }
}
