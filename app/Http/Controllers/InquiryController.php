<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Services\InquiryService;

class InquiryController extends Controller
{
    protected InquiryService $inquiryService;

    public function __construct(InquiryService $inquiryService)
    {
        $this->inquiryService = $inquiryService;
    }

    public function store(ConsultationRequest $request)
    {
        $this->inquiryService->store($request->validated());

        return back()->with('success', 'Your message has been sent successfully!');
    }
}