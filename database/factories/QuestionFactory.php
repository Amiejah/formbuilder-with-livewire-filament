<?php

namespace Database\Factories;

use App\Models\Fields;
use App\Models\Form;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'form_id' => 1,
            'type_id' => $this->faker->numberBetween(1, 8),
            'question' => $this->faker->text(),
            'description' => $this->faker->boolean(),
        ];
    }
}
