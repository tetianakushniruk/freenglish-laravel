<?php

namespace Database\Seeders;

use App\Models\VocabularyDefinition;
use App\Models\VocabularyTopic;
use App\Models\VocabularyWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VocabularyDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vocabulary_definitions')->delete();
        $json = File::get("database/data/vocabulary.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            foreach ($obj->vocabulary as $vocab){
                $isDefinition = VocabularyDefinition::where('definition', $vocab->definition)->first();
                if(!$isDefinition){
                    VocabularyDefinition::create(array(
                        'definition' => $vocab->definition,
                    ));
                }
            }
        }
    }    
}
