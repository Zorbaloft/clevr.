<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 1;
        while ($i <= 10) {
            \App\Models\Lesson::factory()->create([
                'course_id' => 1,
                'order' => $i, // Set the 'order' field
            ]);
            $i++;
        }

        $i = 1;
        while ($i <= 10) {
            \App\Models\Lesson::factory()->create([
                'course_id' => 2,
                'order' => $i, // Set the 'order' field
            ]);
            $i++;
        }
    }
}