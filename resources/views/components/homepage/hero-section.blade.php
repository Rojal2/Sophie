<header class="hero-section">
    <div class="container">
        <h1 class="hero-title hero-animate-item hero-animate-title">{{ $banner->title ?? 'Sophie International Education Pvt. Ltd.' }}</h1>
        <p class="hero-subtitle hero-animate-item hero-animate-subtitle">{{ $banner->subtitle ?? 'Your Gateway to Global Education.' }}</p>
        <div class="hero-actions d-flex justify-content-center hero-animate-item hero-animate-actions">
            <a href="{{ $banner->link ?? route('consultation') }}"
                class="btn btn-lg hero-btn-primary">{{ $banner->button_text ?? 'Book Free Counseling' }}</a>
            <a href="{{ route('test-prep') }}" class="btn btn-lg hero-btn-ghost">Explore Courses</a>
        </div>
    </div>
</header>