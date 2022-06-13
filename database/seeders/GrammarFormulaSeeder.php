<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\GrammarSection;
use App\Models\GrammarFormula;

class GrammarFormulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grammar_formulas')->delete();
        $json = File::get("database/data/grammar.json");
        $data = json_decode($json);
        foreach($data as $obj){
                for($i = 0; $i < 3; $i++){
                    GrammarFormula::create(array(
                        'affirmative' => $obj->formula->affirmative[$i],
                        'negative' => $obj->formula->negative[$i],
                        'question' => $obj->formula->question[$i],
                        'section_id' => GrammarSection::where('topic', $obj->topic)->value('id')
                    ));
                }
        }
    }
}
