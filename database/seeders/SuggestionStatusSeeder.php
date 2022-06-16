<?php

namespace Database\Seeders;

use App\Models\SuggestionStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuggestionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['processing', 'accepted', 'rejected'];
        foreach($statuses as $status){
            SuggestionStatus::create(array(
                'status' => $status
            ));
        }
    }
}
