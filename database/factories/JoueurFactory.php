<?php

namespace Database\Factories;

use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'nom'=>$this->faker->name,
            // 'prenom'=>$this->faker->firstName,
            // 'age'=>$this->faker->numberBetween($min=18, $max=35),
            // 'genre'=>$this->faker->title,
            // 'nat'=>$this->faker->country,
            // 'poste'=>$this->faker->poste,
            // 'tel'=>$this->faker->phoneNumber,
            // 'email'=>$this->faker->email,

        ];
    }
}
