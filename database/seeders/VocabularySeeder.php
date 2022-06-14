<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\VocabularyWord;
use App\Models\VocabularyDefinition;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        VocabularyWord::all()->each(function ($word) { 
            $word->definitions()->attach(
                VocabularyDefinition::all()->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });

    }
}
