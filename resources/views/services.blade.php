@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Core Services</h2>
                <p class="text-muted">Comprehensive solutions as authorized by our Memorandum of Association</p>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-4">
                            <div class="text-primary mb-3">
                                @if(preg_match('/^fa[srl]? /', $service->image))
                                    <i class="{{ $service->image }} fa-2x"></i>
                                @else
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                                        style="width: 50px;">
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