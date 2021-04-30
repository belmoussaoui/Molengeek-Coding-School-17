<?php

namespace Database\Factories;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoitureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voiture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'description' => $this->faker->realText(255),
            'ddf' => $this->faker->date(),
            'model' => $this->faker->text(50),
            'nds' => $this->faker->unique()->randomNumber(5)
        ];
    }
}
