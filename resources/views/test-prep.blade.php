@extends('layouts.app')

@section('content')
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Courses & Training</h2>
                    <p class="text-muted">Language and Test Preparation classes we offer</p>
                </div>
            </div>

            <div class="row g-5">
                <!-- Standardized Tests -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-primary text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-pen-alt me-2"></i> Test Preparation</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($testPreps as $test)
                                    <li class="list-group-item py-3">
                                        <h6 class="fw-bold mb-1">
                                            {{ $test->title }}
                                        </h6>
                                        <small class="text-muted">
                                            {{ $test->description }}
                                        </small>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Language Column -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-danger text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-language me-2"></i> Language Classes</h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                @foreach ($languages as $lang)
                                    <div class="col-md-4">
                                        <div class="p-2 border rounded text-center h-100">
                                            @if($lang->image)
                                                <img src="{{ asset('storage/' . $lang->image) }}" alt="{{ $lang->title }}"
                                                    class="mb-2" style="width: 40px;" loading="lazy">
                                            @else
                                                <i class="fas fa-language fa-2x text-secondary"></i>
                                            @endif
                                            <h6 class="mt-2 fw-bold">{{ $lang->title }}</h6>
                                            <small class="d-block text-muted">{{ $lang->description }}</small>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection