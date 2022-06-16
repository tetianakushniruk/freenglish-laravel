<?php

namespace Database\Seeders;

use App\Models\TestsQuestion;
use App\Models\TestsTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TestsQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests_questions')->delete();
        $json = File::get("database/data/tests.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            foreach ($obj->questions as $q){
                TestsQuestion::create(array(
                    'question' => $q->question,
                    'answer' => $q->answer,
                    'tests_topic_id' => TestsTopic::where('topic', $obj->topic)->value('id')
                ));
            }
        } 
    }
}
