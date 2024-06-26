<?php

namespace Database\Factories;
use App\Models\Role;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'role_id' => Role::inRandomOrder()->first()->id,
            'status' => 'Employed',
        ];
    }
}
