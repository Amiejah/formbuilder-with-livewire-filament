<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fields>
 */
class FieldsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Write the factory for the Fields model
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->randomElement(['text', 'email', 'number', 'date', 'textarea', 'select', 'checkbox', 'radio']),
            'view' => '',
        ];
    }
}
