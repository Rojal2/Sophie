@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light page-premium-section">
        <div class="container">
            <div class="text-center mb-5 reveal-on-scroll">
                <h2 class="fw-bold premium-page-title">Our Core Services</h2>
                <p class="text-muted">Comprehensive solutions as authorized by our Memorandum of Association</p>
                <div class="bg-primary mx-auto mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-4 premium-card reveal-on-scroll reveal-delay-2">
                            <div class="text-primary mb-3 premium-icon-wrap">
                                @if(preg_match('/^fa[srl]? /', $service->image))
                                    <i class="{{ $service->image }} fa-2x"></i>
                                @else
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" loading="lazy">
                                @endif
                            </div>
                            <h3>
                                {{ $service->title }}
                            </h3>
                            <p class="text-muted">
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection