<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'key' => 'site_name',
                'value' => 'My Website',
            ],
            [
                'key' => 'site_logo',
                'value' => 'settings/logo.png',
            ],
            [
                'key' => 'site_favicon',
                'value' => 'settings/favicon.ico',
            ],
            [
                'key' => 'site_email',
                'value' => 'info@mywebsite.com',
            ],
            [
                'key' => 'site_phone',
                'value' => '+1 234 567 890',
            ],
            [
                'key' => 'site_address',
                'value' => 'New York, USA',
            ],
            [
                'key' => 'meta_title',
                'value' => 'My Website – Best Services & Destinations',
            ],
            [
                'key' => 'meta_description',
                'value' => 'We provide top services and amazing travel destinations.',
            ],
            [
                'key' => 'meta_keywords',
                'value' => 'services, destinations, travel, business',
            ],
            [
                'key' => 'facebook_url',
                'value' => 'https://facebook.com/mywebsite',
            ],
            [
                'key' => 'instagram_url',
                'value' => 'https://instagram.com/mywebsite',
            ],
            [
                'key' => 'twitter_url',
                'value' => 'https://twitter.com/mywebsite',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
