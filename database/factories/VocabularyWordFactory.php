<?php

namespace Database\Factories;

use App\Models\VocabularyWord;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VocabularyWord>
 */
class VocabularyWordFactory extends Factory
{
    protected $model = VocabularyWord::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'word' => $this->faker->word()
        ];
    }
}
