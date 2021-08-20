<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $clientIds = Client::pluck('id');/*$this->faker->words(25)*/
        return [
            'title' => $this->faker->word,
            'descr' => $this->faker->sentence,
            'budget' => rand(10000, 50000),
            'client_id' => $clientIds[rand(0, count($clientIds) - 1)],
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'due_date' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'avatar' => '983794168.jpg'
        ];
    }
}
