<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'TOEFL & IELTS',
                'description' => 'English proficiency tests for global admission.',
                'image' => 'courses/toefl.jpg',
                'type' => 'test_prep',
                'duration' => '6 Weeks',
                'price' => 'NPR 15,000',
            ],
            [
                'title' => 'SAT',
                'description' => 'Scholastic Assessment Test for US undergraduate admissions.',
                'image' => 'courses/sat.jpg',
                'type' => 'test_prep',
                'duration' => '3 Months',
                'price' => 'NPR 25,000',
            ],
            [
                'title' => 'Japanese Language',
                'description' => 'Learn Japanese for study and work in Japan.',
                'image' => 'courses/japanese.jpg',
                'type' => 'language',
                'duration' => '6 Months',
                'price' => 'NPR 12,000',
            ],
            [
                'title' => 'Korean Language',
                'description' => 'Korean language specialized for EPS formatting.',
                'image' => 'courses/korean.jpg',
                'type' => 'language',
                'duration' => '6 Months',
                'price' => 'NPR 12,000',
            ],
        ];

        foreach ($courses as $course) {
            Course::create([
                'title' => $course['title'],
                'slug' => Str::slug($course['title']),
                'description' => $course['description'],
                'image' => $course['image'],
                'type' => $course['type'],
                'duration' => $course['duration'],
                'price' => $course['price'],
                'meta_title' => $course['title'] . ' Classes',
                'meta_description' => 'Join our ' . $course['title'] . ' classes today.',
            ]);
        }
    }
}
