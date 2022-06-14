<?php

namespace Database\Seeders;

use App\Models\VocabularyWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VocabularyWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VocabularyWord::factory()->count(7)->create();
    }
}
