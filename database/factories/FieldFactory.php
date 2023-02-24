<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Write the factory for the Field model
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement(['text', 'email', 'number', 'date', 'textarea', 'select', 'checkbox', 'radio']),
            'view' => '',
        ];
    }
}
