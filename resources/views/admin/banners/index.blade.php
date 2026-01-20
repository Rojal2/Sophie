@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Manage Banners</h2>
        <a href="{{ route('banners.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add New Banner
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banners as $banner)
                            <tr>
                                <td class="ps-4">
                                    <img src="{{ asset('storage/' . $banner->image) }}" alt="" class="rounded"
                                        style="width: 80px; height: 40px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="fw-bold">{{ $banner->title }}</div>
                                    <small class="text-muted">{{ $banner->subtitle }}</small>
                                </td>
                                <td>
                                    @if($banner->active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('banners.edit', $banner) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('banners.destroy', $banner) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">No banners found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($banners->hasPages())
            <div class="card-footer bg-white py-3">
                {{ $banners->links() }}
            </div>
        @endif
    </div>
@endsection