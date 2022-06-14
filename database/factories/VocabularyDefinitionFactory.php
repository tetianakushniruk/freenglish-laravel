<?php

namespace Database\Factories;

use App\Models\VocabularyDefinition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VocabularyDefinition>
 */
class VocabularyDefinitionFactory extends Factory
{
    protected $model = VocabularyDefinition::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'definition' => $this->faker->sentence()
        ];
    }
}
