<?php

namespace Database\Factories;

use App\Models\Eleve;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

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
            'prenom' => $this->faker->firstName(),
            'age' => $age,
            'ddn' => $date,
            'estBelge' => $this->faker->boolean(),
        ];
    }
}
