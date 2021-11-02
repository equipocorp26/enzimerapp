<?php

namespace Database\Factories\Area;

use App\Models\Area\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    protected $model = Area::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
        ];
    }
}
