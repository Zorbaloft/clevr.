<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courses = Course::all()->pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->randomHtml(),
            'course_id' => $this->faker->randomElement($courses),
            'duration' => $this->faker->time('i'),
            'order' => 1, // Set 'order' to 1 by default
        ];
    }
}