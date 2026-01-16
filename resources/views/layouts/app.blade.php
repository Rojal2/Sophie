<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Sophie International Education offers expert study abroad counseling, IELTS/PTE/SAT preparation, and Japanese/Korean language classes in Maharajgunj, Kathmandu.">
    <meta name="keywords"
        content="Study Abroad Nepal, Education Consultancy Maharajgunj, IELTS Preparation, Japanese Language Class, Student Visa Services, Sophie International">
    <title>Sophie International Education Pvt. Ltd.</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Sophie International Education"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='inline-flex';">

                <div class="brand-text">
                    <span class="brand-title">Sophie International</span>
                    <span class="brand-subtitle">Education Pvt. Ltd.</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('test-prep') ? 'active' : '' }}"
                            href="{{ route('test-prep') }}">Courses</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('destinations') ? 'active' : '' }}"
                            href="{{ route('destinations') }}">Destinations</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary-custom" href="{{ route('consultation') }}">Book Consultation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Sophie International Education</h5>
                    <p class="small text-secondary">A government registered consultancy (Reg No: 380602/82/83) dedicated
                        to providing quality educational counseling, language training, and visa services in Kathmandu.
                    </p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled small">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Courses</h5>
                    <ul class="list-unstyled small">
                        <li><a href="{{ route('test-prep') }}">IELTS / TOEFL</a></li>
                        <li><a href="{{ route('test-prep') }}">SAT / GRE / GMAT</a></li>
                        <li><a href="{{ route('test-prep') }}">Japanese / Korean</a></li>
                        <li><a href="{{ route('test-prep') }}">Chinese / German</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled small text-secondary mb-3">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Maharajgunj-3, Kathmandu</li>
                        <li><i class="fas fa-phone me-2"></i> +977-9843719770</li>
                        <li><i class="fas fa-envelope me-2"></i> info@sophie.com.np</li>
                    </ul>

                    <h6 class="text-white mb-2">Chat with us:</h6>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/9779843719770" target="_blank"
                            class="btn btn-success btn-sm d-flex align-items-center gap-2">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="https://m.me/sophieinternational" target="_blank"
                            class="btn btn-primary btn-sm d-flex align-items-center gap-2">
                            <i class="fab fa-facebook-messenger"></i> Messenger
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-top border-secondary pt-3 mt-3 text-center small text-secondary">
                &copy; {{ date('Y') }} Sophie International Education Pvt. Ltd. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>