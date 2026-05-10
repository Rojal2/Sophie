<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Professional web development services.',
                'image' => 'services/web-development.jpg',
                'meta_title' => 'Web Development Services',
                'meta_description' => 'Best web development services for your business.',
                'meta_keywords' => 'web development, laravel, php',
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Improve your search engine rankings.',
                'image' => 'services/seo.jpg',
                'meta_title' => 'SEO Optimization Services',
                'meta_description' => 'SEO services to boost online visibility.',
                'meta_keywords' => 'seo, digital marketing, google',
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service['title'],
                'description' => $service['description'],
                'image' => $service['image'],
                'slug' => Str::slug($service['title']),
                'meta_title' => $service['meta_title'],
                'meta_description' => $service['meta_description'],
                'meta_keywords' => $service['meta_keywords'],
            ]);
        }
    }
}
