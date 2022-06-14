<?php

namespace Database\Factories;

use App\Models\VocabularyWord;
use App\Models\VocabularyDefinition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VocabularyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vocabulary_word_id' => VocabularyWord::all()->random()->id,
            'vocabulary_definition_id' => VocabularyDefinition::all()->random()->id,
        ];
    }
}
