<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $projectIds = Project::pluck('id');
        return [
            'title' => $this->faker->word,
            'descr' => $this->faker->sentence,
            'project_id' => $projectIds[rand(0, count($projectIds) - 1)],
            'due_date' => $this->faker->dateTimeBetween('+1 day', '+3 days'),
            'avatar' => $this->faker->imageUrl
        ];
    }
}
