@extends('admin.layout')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.services.index') }}" class="text-decoration-none">
            <i class="fas fa-arrow-left me-1"></i> Back to list
        </a>
        <h2 class="fw-bold mt-2">Add New Service</h2>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Service Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" rows="5" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Service Image (Optional)</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="meta_title" class="form-label fw-bold">SEO Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                value="{{ old('meta_title') }}">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description" class="form-label fw-bold">SEO Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description"
                                rows="3">{{ old('meta_description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label fw-bold">SEO Keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                value="{{ old('meta_keywords') }}">
                        </div>
                        <div class="mb-3">
                            <label for="featured" class="form-label fw-bold">Featured</label>
                            <input type="checkbox" class="form-check-input" id="featured" name="featured"
                                value="1" {{ old('featured') ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary px-4">
                    <i class="fas fa-save me-2"></i> Create Service
                </button>
            </form>
        </div>
    </div>
@endsection