<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventsModel>
 */
class EventsModelFactory extends Factory
{
    protected $model = \App\Models\EventsModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10, true),
            'description' => $this->faker->paragraph(10, true),
        ];
    }
}
