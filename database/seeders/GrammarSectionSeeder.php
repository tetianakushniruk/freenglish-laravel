<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\GrammarSection;

class GrammarSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grammar_sections')->delete();
        $json = File::get("database/data/grammar.json");
        $data = json_decode($json);
        foreach($data as $obj){
            GrammarSection::create(array(
                'topic' => $obj->topic,
                'explanation' => $obj->explanation
            ));
        }
    }
}
