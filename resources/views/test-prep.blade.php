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
                            @foreach ($tests as $test)
                                <li class="list-group-item py-3">
                                    <h6 class="fw-bold mb-1">
                                        {{ $test['name'] }}
                                    </h6>
                                    <small class="text-muted">
                                        {{ $test['desc'] }}
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
                                <div
                                    class="{{ isset($lang['multi_flag']) ? 'col-12' : (($lang['flag'] == 'jp' || $lang['flag'] == 'kr') ? 'col-md-6' : 'col-md-4') }}">
                                    <div
                                        class="p-2 border rounded text-center h-100 {{ isset($lang['multi_flag']) || $lang['flag'] == 'jp' || $lang['flag'] == 'kr' ? 'p-3 bg-light' : '' }}">
                                        @if (isset($lang['multi_flag']))
                                            <div class="d-flex justify-content-center gap-2">
                                                <img src="https://flagcdn.com/w80/{{ $lang['flag'] }}.png"
                                                    alt="{{ $lang['name'] }}" style="width: 30px;">
                                                <img src="https://flagcdn.com/w80/{{ $lang['multi_flag'] }}.png"
                                                    alt="English" style="width: 30px;">
                                            </div>
                                        @else
                                            <img src="https://flagcdn.com/w80/{{ $lang['flag'] }}.png"
                                                alt="{{ $lang['name'] }}" class="mb-2"
                                                style="width: {{ ($lang['flag'] == 'jp' || $lang['flag'] == 'kr') ? '40px' : '30px' }};">
                                        @endif

                                        @if (isset($lang['multi_flag']))
                                            <h6 class="mt-2 mb-0">
                                                {{ $lang['name'] }}
                                            </h6>
                                        @elseif ($lang['flag'] == 'jp' || $lang['flag'] == 'kr')
                                            <h5 class="mt-2 fw-bold">
                                                {{ $lang['name'] }}
                                            </h5>
                                        @else
                                            <h6 class="mt-2">
                                                {{ $lang['name'] }}
                                            </h6>
                                        @endif
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
