<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(),
            'auteur' => $this->faker->name(),
            'ddp' => $this->faker->date(),
            'ndp' => $this->faker->numberBetween(50, 500),
            'estMobile' => $this->faker->boolean(),
        ];
    }
}
