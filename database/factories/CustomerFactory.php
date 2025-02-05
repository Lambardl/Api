<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type= $this->faker->RandomElement(['Individual', 'Compagny']);
        $name= ($type == 'Individual') ?$this->faker->name() : $this->faker->company();
        return [
            'name' => $name,
            'type'=> $type,
            'adress'=> $this->faker->streetAddress(),
            'city'=> $this->faker->city(),
            'postal_code'=> $this->faker->postCode()
        ];
    }
}
