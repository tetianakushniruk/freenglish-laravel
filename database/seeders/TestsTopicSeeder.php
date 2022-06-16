<?php

namespace Database\Seeders;

use App\Models\TestsTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TestsTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests_topics')->delete();
        $json = File::get("database/data/tests.json");
        $data = json_decode($json);
        foreach($data as $obj){
            TestsTopic::create(array(
                'topic' => $obj->topic,
            ));
        }
    }
}
