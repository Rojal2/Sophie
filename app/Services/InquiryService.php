<?php

namespace App\Services;

use App\Models\Inquiry;

class InquiryService
{
    public function store(array $data): void
    {
        Inquiry::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'subject' => $data['interest'] ?? null,
            'message' => $data['comments'],
        ]);
    }
}