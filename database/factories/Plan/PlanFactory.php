<?php

namespace Database\Factories\Plan;

use App\Models\Plan\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    protected $model = Plan::class;
    public function definition()
    {
        return [
            'name'      => $this->faker->sentence(2),
            'duration'  => $this->faker->numberBetween(1,60),
            'amount'    => $this->faker->numberBetween(10,100),
            'status'    => 1,
        ];
    }
}
