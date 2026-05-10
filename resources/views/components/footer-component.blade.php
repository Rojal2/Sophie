<footer class="footer">
    <div class="container">

        <!-- ONE ROW ONLY -->
        <div class="row g-4">

            <!-- Sophie International -->
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-4">Sophie International</h5>
                <p class="small text-muted mb-4 text-white-50">
                    Leading educational consultancy in Nepal, helping students
                    reach their global education goals with expert guidance and language training.
                </p>

                <div class="d-flex gap-3 align-items-center justify-content-start">
                    <a href="{{ config('social.facebook') }}" target="_blank" class="text-white-50">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ config('social.instagram') }}" target="_blank" class="text-white-50">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ config('social.tiktok') }}" target="_blank" class="text-white-50">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="fw-bold mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('test-prep') }}">Test Prep</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-4">Contact Info</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                        Maharajgunj-3, Kathmandu, Nepal
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone me-2 text-primary"></i>
                        +977-01-4720649
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope me-2 text-primary"></i>
                        info@sophie.com.np
                    </li>
                </ul>
            </div>

            <!-- Business Hours -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-4">Business Hours</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2">Sun - Fri: 10:00 AM - 5:00 PM</li>
                    <li>Sat: Closed</li>
                </ul>
            </div>

        </div>

        <hr class="mt-5 mb-4 border-secondary">

        <!-- Bottom Row -->
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="small mb-0 text-white-50">
                    &copy; {{ date('Y') }} Sophie International Education Pvt. Ltd. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="small mb-0 text-white-50">
                    Designed with <i class="fas fa-heart text-danger"></i> for Education
                </p>
            </div>
        </div>

    </div>
</footer>