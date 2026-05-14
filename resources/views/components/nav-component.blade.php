<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light glass-navbar">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Sophie Logo" height="80">
            <div class="brand-text">
                <div class="brand-title">SOPHIE</div>
                <small class="brand-subtitle">International Education</small>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                @php
                    $menu = [
                        'home' => 'Home',
                        'about' => 'About Us',
                        'services' => 'Services',
                        'test-prep' => 'Test Prep',
                        'destinations' => 'Destinations',
                        'contact' => 'Contact',
                    ];
                @endphp

                @foreach($menu as $route => $label)
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link {{ request()->routeIs($route) ? 'active' : '' }}"
                           href="{{ route($route) }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach

                <!-- CTA Button -->
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a href="{{ route('consultation') }}" class="btn btn-primary-custom px-3">
                        Book Counseling
                    </a>
                </li>

                <!-- Admin -->
                @auth
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary btn-sm">
                            Admin
                        </a>
                    </li>
                @endauth

            </ul>
        </div>

    </div>
</nav>

<script>
    (() => {
        const navbar = document.getElementById('mainNavbar');
        if (!navbar) return;
        const updateNavbarState = () => {
            navbar.classList.toggle('is-scrolled', window.scrollY > 8);
        };
        updateNavbarState();
        window.addEventListener('scroll', updateNavbarState, {
            passive: true
        });
    })();
</script>