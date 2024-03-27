<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = collect([
            'started',
            'blocked',
            'completed',
            'planing',
            'working',
        ]);
        return [
            'name' => $this->faker->words(3, true),
            'user' => $this->faker->name(),
            'status' => $status->random(),
            'created_at' => $this->faker->date(),
        ];
    }
}
