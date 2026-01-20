<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Prajwal Adhikari',
                'role' => 'Founder / CEO',
                'bio' => 'Dedicated to bridging the gap between Nepalese students and global opportunities.',
                'image' => 'team/prajwal.jpg',
            ],
            [
                'name' => 'Sarah Smith',
                'role' => 'Senior Counselor',
                'bio' => 'Expert in US and Australian university admissions.',
                'image' => 'team/sarah.jpg',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
