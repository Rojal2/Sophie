@extends('admin.layout')

@section('content')
    <div class="mb-4">
        <a href="{{ route('courses.index') }}" class="text-decoration-none">
            <i class="fas fa-arrow-left me-1"></i> Back to list
        </a>
        <h2 class="fw-bold mt-2">Edit Course</h2>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('courses.update', $course) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title', $course->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" rows="5"
                                required>{{ old('description', $course->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="duration" class="form-label fw-bold">Duration</label>
                                    <input type="text" class="form-control" id="duration" name="duration"
                                        value="{{ old('duration', $course->duration) }}" placeholder="e.g. 2 Months">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label fw-bold">Price (Optional)</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ old('price', $course->price) }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="type" class="form-label fw-bold">Course Type</label>
                            <select class="form-select @error('type') is-invalid @enderror" name="type" id="type" required>
                                <option value="">Select Type</option>
                                <option value="test_prep" {{ old('type', $course->type) == 'test_prep' ? 'selected' : '' }}>
                                    Test Preparation</option>
                                <option value="language" {{ old('type', $course->type) == 'language' ? 'selected' : '' }}>
                                    Language Class</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            @if($course->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid rounded border"
                                        style="max-height: 150px;" alt="">
                                </div>
                            @endif
                            <label for="image" class="form-label fw-bold">Change Image (Optional)</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="meta_title" class="form-label fw-bold">SEO Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                value="{{ old('meta_title', $course->meta_title) }}">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description" class="form-label fw-bold">SEO Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description"
                                rows="3">{{ old('meta_description', $course->meta_description) }}</textarea>
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