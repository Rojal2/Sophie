@extends('layouts.app')

@section('content')
    <section class="py-5 bg-white consultation-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 consultation-card reveal-on-scroll">
                        <div class="card-header bg-primary text-white text-center py-4 consultation-card-header">
                            <h3 class="mb-0 fw-bold">Book Your Free Consultation</h3>
                            <p class="mb-0 text-white-50">Fill out the form below and we will contact you shortly.</p>
                        </div>
                        <div class="card-body p-4 p-md-5">

                            @if (session('success'))
                                <div class="alert alert-success text-center">
                                    <i class="fas fa-check-circle fa-3x mb-3"></i>
                                    <h4>Request Submitted!</h4>
                                    <p>{{ session('success') }}</p>
                                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Return Home</a>
                                </div>
                            @else

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('consultation.store') }}" method="POST" class="consultation-form" id="consultationForm">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Full Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                name="name" required
                                                placeholder="John Doe" value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel"
                                                class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                name="phone" required
                                                placeholder="+977-9800000000" value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                name="email" required
                                                placeholder="name@example.com" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="interest" class="form-label">I am interested in</label>
                                            <select class="form-select @error('interest') is-invalid @enderror"
                                                id="interest" name="interest">
                                                <option value="" selected>Select a topic...</option>
                                                <option value="Japan">Japan (Study/Work)</option>
                                                <option value="USA">USA</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Europe">Europe</option>
                                                <option value="IELTS/PTE">IELTS / PTE / TOEFL</option>
                                                <option value="Language Class">Language Class (JP/KR/CN)</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            @error('interest')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="comments" class="form-label">Detailed Message</label>
                                            <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments" rows="4"
                                                placeholder="Tell us more about your educational background or specific questions...">{{ old('comments') }}</textarea>
                                            @error('comments')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-4 text-center">
                                            <button type="submit" class="btn btn-primary-custom btn-lg w-100 fw-bold d-inline-flex align-items-center justify-content-center gap-2" id="consultationSubmitBtn">
                                                <span class="submit-label">Submit Request</span>
                                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                            </button>
                                            <small class="text-muted d-block mt-2">Your information is sent directly to
                                                info@sophie.com.np</small>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        (() => {
            const form = document.getElementById('consultationForm');
            const submitBtn = document.getElementById('consultationSubmitBtn');
            if (!form || !submitBtn) return;
            form.addEventListener('submit', () => {
                const spinner = submitBtn.querySelector('.spinner-border');
                const label = submitBtn.querySelector('.submit-label');
                submitBtn.disabled = true;
                submitBtn.classList.add('is-loading');
                if (spinner) spinner.classList.remove('d-none');
                if (label) label.textContent = 'Submitting...';
            });
        })();
    </script>
@endsection