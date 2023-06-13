<?php

namespace Database\Factories;

use App\Models\Appliance;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplianceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appliance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'voltage' => $this->faker->randomElement(['110v', '220v']),
            'brand' => $this->faker->randomElement(['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG']),
        ];
    }
}
