<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Models\Banner;
use App\Models\Team;
use App\Models\Course;
use App\Models\Service;
use App\Models\Destination;
use App\Models\Inquiry;

class PageController extends Controller
{
    public function home()
    {
        $banner = Banner::active()->first();
        return view('home', compact('banner'));
    }

    public function about()
    {
        $teams = Team::all();
        return view('about', compact('teams'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function consultation()
    {
        return view('consultation');
    }

    public function storeInquiry(ConsultationRequest $request)
    {
        Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->interest,
            'message' => $request->comments,
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function courses()
    {
        $testPreps = Course::testPrep()->get();
        $languages = Course::language()->get();

        return view('test-prep', compact('testPreps', 'languages'));
    }

    public function services()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function destinations()
    {
        $destinations = Destination::all();
        return view('destinations', compact('destinations'));
    }
}
