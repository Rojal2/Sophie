<?php

namespace App\Services;

use App\Models\Inquiry;
use App\Models\Setting;
use App\Mail\InquiryReceived;
use Illuminate\Support\Facades\Mail;

class InquiryService
{
    public function store(array $data): void
    {
        $inquiry = Inquiry::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'subject' => $data['interest'] ?? null,
            'message' => $data['comments'],
        ]);

        // Send email to admin
        $adminEmail = Setting::where('key', 'site_email')->value('value') ?? 'info@sophie.com.np';
        
        try {
            Mail::to($adminEmail)->send(new InquiryReceived($inquiry));
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            report($e);
        }
    }
}