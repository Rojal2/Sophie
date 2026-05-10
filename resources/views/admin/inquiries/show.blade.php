@extends('admin.layout')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.inquiries.index') }}" class="text-decoration-none">
            <i class="fas fa-arrow-left me-1"></i> Back to list
        </a>
        <h2 class="fw-bold mt-2">Consultation Details</h2>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3 fs-5 fw-bold border-bottom-0">
                    Detailed Comments
                </div>
                <div class="card-body p-4 bg-light rounded-bottom">
                    <p class="mb-0" style="white-space: pre-line;">{{ $inquiry->message }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3 fs-6 fw-bold">
                    Student Metadata
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="small text-muted d-block">Full Name</label>
                        <span class="fw-bold">{{ $inquiry->name }}</span>
                    </div>
                    <div class="mb-3">
                        <label class="small text-muted d-block">Email Address</label>
                        <a href="mailto:{{ $inquiry->email }}" class="text-decoration-none">{{ $inquiry->email }}</a>
                    </div>
                    <div class="mb-3">
                        <label class="small text-muted d-block">Phone Number</label>
                        <a href="tel:{{ $inquiry->phone }}" class="text-decoration-none">{{ $inquiry->phone ?? 'N/A' }}</a>
                    </div>
                    <div class="mb-3">
                        <label class="small text-muted d-block">Interested In</label>
                        <span class="badge bg-primary">{{ $inquiry->subject ?? 'General' }}</span>
                    </div>
                    <div class="mb-0">
                        <label class="small text-muted d-block">Submitted On</label>
                        <span>{{ $inquiry->created_at->format('F d, Y @ h:i A') }}</span>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST"
                onsubmit="return confirm('Delete this inquiry?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100">
                    <i class="fas fa-trash me-2"></i> Delete Permanently
                </button>
            </form>
        </div>
    </div>
@endsection