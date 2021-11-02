<?php

namespace Database\Factories\University;

use App\Models\University\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    protected $model = University::class;
    public function definition()
    {
        return [
            'name'      => $this->faker->sentence(2),
            'acronym'   => $this->faker->unique()->currencyCode
        ];
    }
}
