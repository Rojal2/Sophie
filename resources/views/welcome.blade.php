@extends('layouts.app')

@section('content')
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 mb-5 mb-lg-0 reveal-on-scroll">
                <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2 rounded-pill fw-bold">Welcome to Sophie</span>
                <h1 class="display-4 fw-bold mb-4">Your Gateway to <br><span class="text-primary">International Education</span></h1>
                <p class="lead text-muted mb-5">We provide expert consultancy, test preparation, and language classes to help you achieve your dreams of studying abroad.</p>
                
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('consultation') }}" class="btn btn-primary-custom">
                        Book a Consultation
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg rounded-3 px-4">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="col-lg-6 reveal-on-scroll reveal-delay-2">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1523050335102-c6244484c97d?auto=format&fit=crop&w=800&q=80" 
                        alt="Education" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 m-4 shadow rounded-3 d-none d-md-block">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-success-subtle text-success p-3 rounded-circle">
                                <i class="fas fa-check-circle fa-lg"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Certified Agency</h6>
                                <small class="text-muted">Reg No: 380602/82/83</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <h2 class="fw-bold text-primary mb-0">100%</h2>
                <p class="text-muted">Guidance</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold text-primary mb-0">5+</h2>
                <p class="text-muted">Countries</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold text-primary mb-0">10+</h2>
                <p class="text-muted">Courses</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold text-primary mb-0">24/7</h2>
                <p class="text-muted">Support</p>
            </div>
        </div>
    </div>
</section>
@endsection
