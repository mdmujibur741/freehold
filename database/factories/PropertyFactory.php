<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $name = $this->faker->name;
         $slug = Str::slug($name,'-');
        return [
                'name' => $name,
                'slug' => $slug,
                'price' => $this->faker->randomNumber(8),
                'description' => $this->faker->text(200),
                'city_id' => $this->faker->numberBetween(1,20), 
                'bed_id' => $this->faker->numberBetween(1,20), 
                'shower_id' => $this->faker->numberBetween(1,20), 
                'zipCode_id' => $this->faker->numberBetween(1,20), 
                'road_id' => $this->faker->numberBetween(1,20), 
                'agent_id' => $this->faker->numberBetween(1,20), 
                'status_id' => $this->faker->numberBetween(1,4), 
        ];
    }
}
