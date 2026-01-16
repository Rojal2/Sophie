@extends('layouts.app')

@section('content')
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4">Get in Touch</h2>
                    <p class="text-muted mb-5">Visit our registered office in Maharajgunj or send us a message.</p>

                    <div class="d-flex mb-4">
                        <div class="me-3 text-primary"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                        <div>
                            <h5 class="fw-bold">Registered Office</h5>
                            <p class="text-muted">Maharajgunj, Ward No. 3<br>Kathmandu Metropolitan City, Nepal</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-3 text-primary"><i class="fas fa-phone fa-2x"></i></div>
                        <div>
                            <h5 class="fw-bold">Phone</h5>
                            <p class="text-muted">+977-9843719770 (Office)</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-3 text-primary"><i class="fas fa-envelope fa-2x"></i></div>
                        <div>
                            <h5 class="fw-bold">Email</h5>
                            <p class="text-muted">info@sophie.com.np</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="me-3 text-primary"><i class="fas fa-clock fa-2x"></i></div>
                        <div>
                            <h5 class="fw-bold">Opening Hours</h5>
                            <p class="text-muted">Sunday - Friday: 10:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow border-0 overflow-hidden h-100">
                        <!-- Google Map Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.066467364804!2d85.3347983150638!3d27.74614498277573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193edf6bd2af%3A0x44ac26fce7c33d8c!2sMaharajgunj%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1625567890123!5m2!1sen!2snp"
                            width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection