<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\VocabularyTopic;

class VocabularyTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vocabulary_topics')->delete();
        $json = File::get("database/data/vocabulary.json");
        $data = json_decode($json);
        foreach($data as $obj){
            VocabularyTopic::create(array(
                'topic' => $obj->topic,
            ));
        }
    }
}
