<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement($array = array('completed', 'pending', 'running')),
            'due' => $this->faker->dateTime($max = 'now', $timezone = null),
            'person' => $this->faker->firstName(),


            // 'content'=> ,
            // 'status'=> ,
            // 'due'=> ,
            // 'person'=> ,
        ];
    }
}
