<header class="hero-section">
    <div class="container">
        <h1 class="hero-title">{{ $banner->title ?? 'Sophie International Education Pvt. Ltd.' }}</h1>
        <p class="hero-subtitle">{{ $banner->subtitle ?? 'Your Gateway to Global Education.' }}</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ $banner->link ?? route('consultation') }}"
                class="btn btn-light btn-lg text-primary fw-bold">{{ $banner->button_text ?? 'Book Free Counseling' }}</a>
            <a href="{{ route('test-prep') }}" class="btn btn-outline-light btn-lg">Explore Courses</a>
        </div>
    </div>
</header>