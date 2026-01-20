@extends('layouts.app')

@section('content')
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Using an external image for now, consistent with legacy -->
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                        alt="About Us" class="img-fluid rounded shadow-lg mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-primary fw-bold text-uppercase">Who We Are</h6>
                    <h2 class="fw-bold mb-4">Committed to Excellence in Education</h2>
                    <p class="text-muted"><strong>Sophie International Education Pvt. Ltd.</strong> is a registered
                        educational consultancy (Reg No: 380602/82/83) established under the Companies Act, 2063.
                        Located in Maharajgunj-3, Kathmandu, we are dedicated to bridging the gap between Nepalese
                        students and global opportunities.</p>
                    <p class="text-muted">Founded by Mr. Prajwal Adhikari, our mission is to provide accurate
                        information regarding scholarships, educational opportunities, and career paths for students
                        aiming for Bachelors, Masters, and beyond.</p>

                    <div class="row mt-4">
                        @foreach($teams as $team)
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}"
                                        class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="fw-bold">{{ $team->name }}</h6>
                                        <p class="small text-primary mb-1">{{ $team->role }}</p>
                                        <p class="small text-muted mb-0">{{ Str::limit($team->bio, 50) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection