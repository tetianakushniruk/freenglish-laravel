<?php

namespace Database\Seeders;

use App\Models\GrammarSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GrammarSectionSeeder::class);
        $this->call(GrammarExampleSeeder::class);
        $this->call(GrammarFormationSeeder::class);
        $this->call(GrammarFormulaSeeder::class);
    }
}
