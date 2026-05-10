@extends('admin.layout')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.banners.index') }}" class="text-decoration-none">
            <i class="fas fa-arrow-left me-1"></i> Back to list
        </a>
        <h2 class="fw-bold mt-2">Edit Banner</h2>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title', $banner->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-bold">Subtitle</label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                                name="subtitle" value="{{ old('subtitle', $banner->subtitle) }}">
                            @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="button_text" class="form-label fw-bold">Button Text</label>
                                    <input type="text" class="form-control" id="button_text" name="button_text"
                                        value="{{ old('button_text', $banner->button_text) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="link" class="form-label fw-bold">Button Link</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ old('link', $banner->link) }}" placeholder="/contact">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Current Image</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid rounded border"
                                    style="max-height: 150px;" alt="">
                            </div>
                            <label for="image" class="form-label fw-bold">Change Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            <small class="text-muted">Leave empty to keep current image.</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="active" class="form-label fw-bold">Status</label>
                            <select class="form-select" name="active" id="active">
                                <option value="1" {{ old('active', $banner->active) == '1' ? 'selected' : '' }}>Active
                                </option>
                                <option value="0" {{ old('active', $banner->active) == '0' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary px-4">
                    <i class="fas fa-save me-2"></i> Save Changes
                </button>
            </form>
        </div>
    </div>
@endsection