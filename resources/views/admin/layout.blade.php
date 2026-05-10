<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Sophie International</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            color: rgba(255, 255, 255, .8);
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .sidebar a:hover,
        .sidebar a.active {
            color: white;
            background-color: rgba(255, 255, 255, .1);
        }
    </style>
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="p-3 border-bottom border-secondary text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Sophie Admin" height="60" class="img-fluid">
                </div>
                <div class="py-3">
                    <a href="{{ route('admin.dashboard') }}"
                        class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home me-2"></i> Dashboard
                    </a>
                    <a href="{{ route('banners.index') }}"
                        class="{{ request()->is('admin/banners*') ? 'active' : '' }}">
                        <i class="fas fa-image me-2"></i> Banners
                    </a>
                    <a href="{{ route('courses.index') }}"
                        class="{{ request()->is('admin/courses*') ? 'active' : '' }}">
                        <i class="fas fa-book me-2"></i> Courses
                    </a>
                    <a href="{{ route('services.index') }}"
                        class="{{ request()->is('admin/services*') ? 'active' : '' }}">
                        <i class="fas fa-concierge-bell me-2"></i> Services
                    </a>
                    <a href="{{ route('destinations.index') }}"
                        class="{{ request()->is('admin/destinations*') ? 'active' : '' }}">
                        <i class="fas fa-map-marker-alt me-2"></i> Destinations
                    </a>
                    <a href="{{ route('teams.index') }}" class="{{ request()->is('admin/teams*') ? 'active' : '' }}">
                        <i class="fas fa-users me-2"></i> Our Team
                    </a>
                    <a href="{{ route('inquiries.index') }}"
                        class="{{ request()->is('admin/inquiries*') ? 'active' : '' }}">
                        <i class="fas fa-calendar-check me-2"></i> Consultations
                    </a>
                    <a href="{{ route('admin.settings') }}"
                        class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <i class="fas fa-cog me-2"></i> Settings
                    </a>
                    <a href="{{ route('home') }}" target="_blank" class="mt-5 border-top border-secondary pt-3">
                        <i class="fas fa-external-link-alt me-2"></i> Visit Site
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </form>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 py-5 px-md-5">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>