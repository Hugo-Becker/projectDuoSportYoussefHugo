<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Factory;



class EquipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clubName'=>$this->faker->company,
            'ville'=>$this->faker->city,
            'pays'=>$this->faker->country,
            'maxPlayers'=>$this->faker->numberBetween($min = 6, $max = 10),
            'maxAvants'=>2,
            'maxCentres'=>2,
            'maxArrieres'=>2,
            'maxRemplaçants'=>2,
        ];
    }
}
