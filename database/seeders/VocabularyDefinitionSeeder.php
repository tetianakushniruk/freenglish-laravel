<?php

namespace Database\Seeders;

use App\Models\VocabularyDefinition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VocabularyDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VocabularyDefinition::factory()->count(12)->create();
    }
}
