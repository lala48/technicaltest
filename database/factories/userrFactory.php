<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class userrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Factory::create();
        return [
            'date_of_birth' => $faker->date('y_m_d') ,
            'full_name' => $faker->name(),
            'address' => $faker->address(),
            'phone' => $faker-> phoneNumber(),
            'email' =>$faker->freeEmailDomain(),
            'active' => Arr::random([1,10]), 
        ];
    }
}
