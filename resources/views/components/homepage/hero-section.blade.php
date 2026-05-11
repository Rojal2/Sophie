<header class="hero-section">
    <div class="container">
        <h1 class="hero-title">{{ $banner->title ?? 'Sophie International Education Pvt. Ltd.' }}</h1>
        <p class="hero-subtitle">{{ $banner->subtitle ?? 'Your Gateway to Global Education.' }}</p>
        <div class="hero-actions d-flex justify-content-center">
            <a href="{{ $banner->link ?? route('consultation') }}"
                class="btn btn-lg hero-btn-primary">{{ $banner->button_text ?? 'Book Free Counseling' }}</a>
            <a href="{{ route('test-prep') }}" class="btn btn-lg hero-btn-ghost">Explore Courses</a>
        </div>
    </div>
</header>