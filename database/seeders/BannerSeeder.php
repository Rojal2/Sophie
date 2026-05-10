<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        Banner::create([
            'title' => 'Sophie International Education Pvt. Ltd.',
            'subtitle' => 'Your Gateway to Global Education. Authorized counseling, language training, and visa preparation services.',
            'image' => 'banners/hero-bg.jpg',
            'link' => '/consultation',
            'button_text' => 'Book Free Counseling',
            'active' => true,
        ]);
    }
}
