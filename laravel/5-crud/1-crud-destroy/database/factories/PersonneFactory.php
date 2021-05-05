<?php

namespace Database\Factories;

use App\Models\Personne;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personne::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->date();
        $from = new DateTime($date);
        $now = new DateTime();
        $age = $from->diff($now)->y;

        return [
            'nom' => $this->faker->lastName,
            'prénom' => $this->faker->firstName,
            'age' => $age,
            'ddn' => $date,
            'genre' => $this->faker->numberBetween(1, 2)
        ];
    }
}
