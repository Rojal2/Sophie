@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light page-premium-section">
        <div class="container">
            <div class="text-center mb-5 reveal-on-scroll">
                <h2 class="fw-bold premium-page-title">Study Destinations</h2>
                <p class="text-muted">We coordinate with institutions in these regions</p>
                <div class="bg-primary mx-auto mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row g-4">
                @foreach ($destinations as $dest)
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm premium-card reveal-on-scroll reveal-delay-2">
                            <div class="card-body text-center">
                                @if(Str::startsWith($dest->image, 'flag'))
                                    <img src="https://flagcdn.com/w80/{{ $dest->image }}.png" alt="{{ $dest->name }}" class="mb-3"
                                        style="width: 50px;">
                                @else
                                    <img src="{{ asset('storage/' . $dest->image) }}" alt="{{ $dest->name }}" class="mb-3"
                                        style="height: 150px; width: 100%; object-fit: cover; border-radius: 5px;">
                                @endif
                                <h4>
                                    {{ $dest->name }}
                                </h4>
                                <p class="small text-muted">
                                    {{ $dest->description }}
                                </p>
                                <a href="{{ route('contact') }}" class="btn btn-sm premium-outline-btn">Inquire Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection