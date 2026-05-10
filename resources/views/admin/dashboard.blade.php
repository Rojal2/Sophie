@extends('admin.layout')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Admin Dashboard</h2>
            <p class="text-muted">Welcome to the Sophie International Admin Panel. Use the sidebar to manage different
                sections of your website.</p>
        </div>

        <!-- Quick Stats or Links -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle me-3">
                            <i class="fas fa-envelope fa-lg"></i>
                        </div>
                        <div>
                            <h4 class="mb-0 fw-bold">Consultations</h4>
                            <small class="text-muted">Form submissions</small>
                        </div>
                    </div>
                    <a href="{{ route('admin.inquiries.index') }}" class="btn btn-primary btn-sm w-100">View All</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle me-3">
                            <i class="fas fa-book fa-lg"></i>
                        </div>
                        <div>
                            <h4 class="mb-0 fw-bold">Courses</h4>
                            <small class="text-muted">Manage classes</small>
                        </div>
                    </div>
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-success btn-sm w-100">Manage Courses</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-info bg-opacity-10 text-info p-3 rounded-circle me-3">
                            <i class="fas fa-cog fa-lg"></i>
                        </div>
                        <div>
                            <h4 class="mb-0 fw-bold">Settings</h4>
                            <small class="text-muted">Site configuration</small>
                        </div>
                    </div>
                    <a href="{{ route('admin.settings') }}" class="btn btn-info btn-sm w-100 text-white">Update Settings</a>
                </div>
            </div>
        </div>
    </div>
@endsection