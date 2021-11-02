<?php

namespace Database\Factories\Career;

use App\Models\Career\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    protected $model = Career::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
        ];
    }
}
