<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agent;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
               'name' => $this->faker->name,
               'title' => $this->faker->title,
               'description' => $this->faker->text(200),
               'facebook' => $this->faker->url,
               'twitter' => $this->faker->url,
               'instagram' => $this->faker->url,
               'linkedin' => $this->faker->url,
        ];
    }
}
