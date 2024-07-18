<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status= $this->faker->randomElement(['Billed', 'Paid', 'Cancel']);
        return [
            'amount' => $this->faker->numberBetween(100,1000),
            'customer_id'=> Customer::factory(),
            'status'=> $status,
            'billed_date'=> $this->faker->dateTimeThisDecade(),
            'paid_date'=>$status== 'Paid'? $this->faker->dateTimeThisDecade() : NULL,
        ];
    }
}
