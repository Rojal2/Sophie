<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $destinations = [
            [
                'name' => 'Paris',
                'description' => 'The city of love and lights.',
                'image' => 'destinations/paris.jpg',
                'meta_title' => 'Visit Paris',
                'meta_description' => 'Explore the beauty of Paris.',
                'meta_keywords' => 'paris, france, travel',
            ],
            [
                'name' => 'Bali',
                'description' => 'A tropical paradise.',
                'image' => 'destinations/bali.jpg',
                'meta_title' => 'Visit Bali',
                'meta_description' => 'Discover Bali beaches and culture.',
                'meta_keywords' => 'bali, indonesia, travel',
            ],
        ];

        foreach ($destinations as $destination) {
            Destination::create([
                'name' => $destination['name'],
                'description' => $destination['description'],
                'image' => $destination['image'],
                'slug' => Str::slug($destination['name']),
                'meta_title' => $destination['meta_title'],
                'meta_description' => $destination['meta_description'],
                'meta_keywords' => $destination['meta_keywords'],
            ]);
        }
    }
}
