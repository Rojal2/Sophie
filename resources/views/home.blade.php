@extends('layouts.app')

@section('content')
    <!-- Hero -->
    @include('components.homepage.hero-section')
    <!-- Quick Facts -->
    <section class="py-5 bg-white border-bottom">
        <div class="container">
            <div class="row text-center g-4 quick-facts-row">
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-3 fact-item reveal-on-scroll reveal-delay-1">
                        <span class="fact-icon-wrap">
                            <i class="fas fa-map-marker-alt text-danger"></i>
                        </span>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold">Location</h6>
                            <small>Maharajgunj-3, Kathmandu</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-3 fact-item reveal-on-scroll reveal-delay-2">
                        <span class="fact-icon-wrap">
                            <i class="fas fa-globe-asia text-primary"></i>
                        </span>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold">Destinations</h6>
                            <small>Japan, Australia, USA, Europe</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-3 fact-item reveal-on-scroll reveal-delay-3">
                        <span class="fact-icon-wrap">
                            <i class="fas fa-check-circle text-success"></i>
                        </span>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold">Govt. Registered</h6>
                            <small>Reg No: 380602/82/83</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 reveal-on-scroll">
                <h2 class="fw-bold text-dark">Why Sophie International?</h2>
                <div class="bg-primary mx-auto mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    @php
                        $delayClass = match ($loop->index % 4) {
                            0 => 'reveal-delay-1',
                            1 => 'reveal-delay-2',
                            2 => 'reveal-delay-3',
                            default => 'reveal-delay-4',
                        };
                    @endphp
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-card text-center reveal-on-scroll {{ $delayClass }}">
                            <div class="icon-box">
                                @if(preg_match('/^fa[srl]? /', $service->image))
                                    <i class="{{ $service->image }}"></i>
                                @else
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" loading="lazy">
                                @endif
                            </div>
                            <h5 class="fw-bold">{{$service->title}}</h5>
                            <p class="text-muted small">{{$service->description}}</p>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="text-center mt-4 reveal-on-scroll reveal-delay-3">
            <a href="{{ route('services') }}" class="btn btn-primary px-4">
                View More Services
            </a>
        </div>
        </div>
    </section>
@endsection