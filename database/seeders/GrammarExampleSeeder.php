<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\GrammarSection;
use App\Models\GrammarExample;

class GrammarExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grammar_examples')->delete();
        $json = File::get("database/data/grammar.json");
        $data = json_decode($json);
        foreach($data as $obj){
            foreach($obj->examples as $example){
                GrammarExample::create(array(
                    'example' => $example,
                    'grammar_section_id' => GrammarSection::where('topic', $obj->topic)->value('id')
                ));
            }
        }
    }
}
