<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<!-- Page Banner -->
<section class="bg-danger text-white py-5 mt-50">
    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            About Us
        </h1>

        <p class="lead">
            Learn more about our company
        </p>

    </div>
</section>

<!-- About Company -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                     class="img-fluid rounded shadow"
                     alt="About Image">
            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    We Build Modern Websites
                </h2>

                <p class="text-muted">
                    We are a professional web development company creating
                    responsive Laravel and Bootstrap websites for businesses,
                    startups, and personal brands.
                </p>

                <p class="text-muted">
                    Our team focuses on clean design, high performance,
                    security, and user-friendly interfaces.
                </p>

                <div class="row mt-4">

                    <div class="col-6 mb-3">
                        <div class="border rounded p-3 text-center shadow-sm">

                            <h3 class="text-primary fw-bold">
                                5+
                            </h3>

                            <p class="mb-0">
                                Years Experience
                            </p>

                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="border rounded p-3 text-center shadow-sm">

                            <h3 class="text-success fw-bold">
                                100+
                            </h3>

                            <p class="mb-0">
                                Projects Completed
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- Mission Vision -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Mission & Vision
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-md-6">

                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">

                        <i class="bi bi-bullseye fs-1 text-primary"></i>

                        <h3 class="mt-3">
                            Our Mission
                        </h3>

                        <p class="text-muted">
                            To provide modern, responsive, and scalable
                            web solutions using Laravel and Bootstrap.
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">

                        <i class="bi bi-eye fs-1 text-success"></i>

                        <h3 class="mt-3">
                            Our Vision
                        </h3>

                        <p class="text-muted">
                            To become a trusted technology partner for
                            businesses worldwide.
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our Team
            </h2>
        </div>

        <div class="row g-4">

            <!-- Team Member -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow text-center h-100">

                    <img src="https://randomuser.me/api/portraits/men/32.jpg"
                         class="card-img-top"
                         alt="Team">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            John Doe
                        </h4>

                        <p class="text-muted">
                            Full Stack Developer
                        </p>

                        <div>
                            <a href="#" class="text-dark me-2">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" class="text-dark me-2">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="#" class="text-dark">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Team Member -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow text-center h-100">

                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                         class="card-img-top"
                         alt="Team">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Sarah Smith
                        </h4>

                        <p class="text-muted">
                            UI/UX Designer
                        </p>

                        <div>
                            <a href="#" class="text-dark me-2">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" class="text-dark me-2">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="#" class="text-dark">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Team Member -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow text-center h-100">

                    <img src="https://randomuser.me/api/portraits/men/75.jpg"
                         class="card-img-top"
                         alt="Team">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Michael Lee
                        </h4>

                        <p class="text-muted">
                            Backend Developer
                        </p>

                        <div>
                            <a href="#" class="text-dark me-2">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" class="text-dark me-2">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="#" class="text-dark">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection
</body>
</html>