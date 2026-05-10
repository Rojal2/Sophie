<?php

namespace App\Services;

use App\Models\Banner;
use App\Models\Team;
use App\Models\Course;
use App\Models\Service;
use App\Models\Destination;

class PageService
{
    public function homeData(): array
    {
        return [
            'banner' => Banner::active()->first(),
            'services' => Service::latest()->take(4)->get(),
        ];
    }

    public function aboutData(): array
    {
        return [
            'teams' => Team::all(),
        ];
    }

    public function coursesData(): array
    {
        return [
            'testPreps' => Course::testPrep()->get(),
            'languages' => Course::language()->get(),
        ];
    }

    public function servicesData(): array
    {
        return [
            'services' => Service::latest()->get(),
        ];
    }

    public function destinationsData(): array
    {
        return [
            'destinations' => Destination::all(),
        ];
    }
}