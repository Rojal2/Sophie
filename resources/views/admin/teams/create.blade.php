@extends('admin.layout')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.teams.index') }}" class="text-decoration-none">
            <i class="fas fa-arrow-left me-1"></i> Back to list
        </a>
        <h2 class="fw-bold mt-2">Add Team Member</h2>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label fw-bold">Role / Designation</label>
                            <input type="text" class="form-control @error('role') is-invalid @enderror" id="role"
                                name="role" value="{{ old('role') }}" required placeholder="e.g. Managing Director">
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label fw-bold">Short Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="4">{{ old('bio') }}</textarea>
                        </div>

                        <h5 class="fw-bold mt-4 mb-3 border-bottom pb-2">Social Links (Optional)</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="social_facebook" class="form-label">Facebook URL</label>
                                    <input type="url" class="form-control" id="social_facebook" name="social_facebook"
                                        value="{{ old('social_facebook') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="social_twitter" class="form-label">Twitter/X URL</label>
                                    <input type="url" class="form-control" id="social_twitter" name="social_twitter"
                                        value="{{ old('social_twitter') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="social_linkedin" class="form-label">LinkedIn URL</label>
                                    <input type="url" class="form-control" id="social_linkedin" name="social_linkedin"
                                        value="{{ old('social_linkedin') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Profile Photo</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            <small class="text-muted">Square image recommended.</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary px-4">
                    <i class="fas fa-save me-2"></i> Save Member
                </button>
            </form>
        </div>
    </div>
@endsection