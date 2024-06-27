<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Course::factory()->create([
            'title' => 'Curso de Fotografia - "Explorando a Arte da Captura"',
            'description' => 'Descubra o mundo da fotografia através do curso "Explorando a Arte da Captura". Este curso foi meticulosamente criado para ensinar tanto iniciantes como entusiastas da fotografia os princípios essenciais e técnicas avançadas para capturar imagens impressionantes. Ao longo das aulas, exploraremos desde os fundamentos básicos da câmera até às técnicas avançadas de composição e edição, tudo adaptado para o contexto artístico e cultural de Portugal.',
            'excerpt' => 'Aprende fotografia do zero!',
            'image_path' => '/images/courses/adventure-photography-capturing-natures-wonders/thumbnail.jpg',
            'slug' => 'explorando-a-arte-da-Captura',
            'price' => '99.99',
            'level' => 'Intermediate',
            'status' => 'ativar',
            'access' => '3 months',
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Curso de Culinária - "Sabores de Portugal"',
            'description' => 'Descubra os segredos e tradições da culinária portuguesa com o curso "Sabores de Portugal". Este curso é uma viagem gastronómica pelas diversas regiões de Portugal, onde aprenderá a preparar pratos típicos que fazem parte do património culinário do país. Desde os saborosos petiscos, como o famoso bacalhau à Brás e as deliciosas pastéis de nata, até aos pratos principais e sobremesas que definem a nossa cultura, este curso é ideal tanto para iniciantes como para entusiastas da cozinha',
            'excerpt' => 'Aprende a cozinhar do zero!',
            'image_path' => '/images/courses/culinary-creativity-exploring-global-flavors/thumbnail.jpg',
            'slug' => 'Sabores-de-Portugal',
            'price' => '129.99',
            'level' => 'Advanced',
            'status' => 'ativar',
            'access' => '6 months',
        ]);


        $this->call([
            LessonSeeder::class,
        ]);

        // Update course duration after all the lessons have been created
        foreach (Course::all() as $course) {
            $totalTime = 0;
            foreach ($course->lessons()->get() as $lesson) {
                $totalTime += $lesson->duration;
            }

            $course->duration = $totalTime;
            $course->save();
        }
    }
}
