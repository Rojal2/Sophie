@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Study Destinations</h2>
            <p class="text-muted">We coordinate with institutions in these regions</p>
        </div>
        <div class="row g-4">
            @foreach ($destinations as $dest)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://flagcdn.com/w80/{{ $dest['flag'] }}.png"
                                alt="{{ $dest['name'] }}" class="mb-3" style="width: 50px;">
                            <h4>
                                {{ $dest['name'] }}
                            </h4>
                            <p class="small text-muted">
                                {{ $dest['desc'] }}
                            </p>
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-primary">Inquire Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
