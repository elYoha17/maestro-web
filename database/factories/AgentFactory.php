<?php

namespace Database\Factories;

use App\Actions\GenerateAgentMatricula;
use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'other_name' => $this->faker->optional()->lastName(),
            'matricula' => app(GenerateAgentMatricula::class)(),
            'sex' => $this->faker->numberBetween(1, 2),
            'birth_date' => $this->faker->optional()->date(),
            'phone_number' => $this->faker->optional()->phoneNumber(),
            'address' => $this->faker->optional()->address(),
            'is_active' => $this->faker->randomElement([true, false]),
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => true,
        ]);
    }
}
