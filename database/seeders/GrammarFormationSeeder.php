<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\GrammarSection;
use App\Models\GrammarFormation;

class GrammarFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grammar_formations')->delete();
        $json = File::get("database/data/grammar.json");
        $data = json_decode($json);
        foreach($data as $obj){
                for($i = 0; $i < 3; $i++){
                    GrammarFormation::create(array(
                        'affirmative' => $obj->formation->affirmative[$i],
                        'negative' => $obj->formation->negative[$i],
                        'question' => $obj->formation->question[$i],
                        'grammar_section_id' => GrammarSection::where('topic', $obj->topic)->value('id')
                    ));
                }
        }
    }
}
