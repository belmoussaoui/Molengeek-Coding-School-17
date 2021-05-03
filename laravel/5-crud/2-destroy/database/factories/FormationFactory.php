<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'ndp' => $this->faker->numberBetween(5, 25),
            'ndpHC' => $this->faker->numberBetween(0, 5),
            'description' => $this->faker->text(),
        ];
    }
}
