@extends('admin.layout')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-bold">General Settings</h5>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="site_address" class="form-label fw-bold">Address</label>
                    <input type="text" class="form-control" id="site_address" name="site_address"
                        value="{{ $settings['site_address'] ?? '' }}" required>
                    <small class="text-muted">Displayed in footer and contact page.</small>
                </div>

                <div class="mb-3">
                    <label for="site_phone" class="form-label fw-bold">Phone Number</label>
                    <input type="text" class="form-control" id="site_phone" name="site_phone"
                        value="{{ $settings['site_phone'] ?? '' }}" required>
                </div>

                <div class="mb-4">
                    <label for="site_email" class="form-label fw-bold">Email Address</label>
                    <input type="email" class="form-control" id="site_email" name="site_email"
                        value="{{ $settings['site_email'] ?? '' }}" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i> Save Changes
                </button>
            </form>
        </div>
    </div>
@endsection