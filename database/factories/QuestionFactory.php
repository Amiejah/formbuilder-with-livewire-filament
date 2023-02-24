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
            'form_id' => $this->faker->numberBetween(Form::pluck('id')),
            'field_id' => $this->faker->numberBetween(Fields::pluck('id')),
            'label' => $this->faker->text,
            'is_required' => $this->faker->boolean,
            'is_active' => $this->faker->boolean,
        ];
    }
}
