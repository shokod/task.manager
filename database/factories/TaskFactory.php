<?php

namespace Database\Factories;

use App\Models\User;
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
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->text,
            'assigned_to' => $this->faker->word,
            'date_assigned' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'progress' => $this->faker->number(),
            'is_done' => $this->faker->boolean,
            'comments' => $this->faker->text,
            'creator_id'=>User::factory(),
            
        ];
    }
}
