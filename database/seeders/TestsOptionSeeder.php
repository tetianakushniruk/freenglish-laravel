<?php

namespace Database\Seeders;

use App\Models\TestsOption;
use App\Models\TestsQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TestsOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests_options')->delete();
        $json = File::get("database/data/tests.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            foreach ($obj->questions as $q){
                foreach($q->options as $o)
                    TestsOption::create(array(
                        'option' => $o,
                        'tests_question_id' => TestsQuestion::where('question', $q->question)->value('id')
                    ));
            }
        } 
    }
}
