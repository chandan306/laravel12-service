<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="bg-dark text-white py-5 mt-50">
    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Our Portfolio
        </h1>

        <p class="lead">
            Explore our latest projects and creative work
        </p>

    </div>
</section>

<!-- Portfolio Section -->
<section class="py-5">
    <div class="container">

        <!-- Filter Buttons -->
        <div class="text-center mb-5">

            <button class="btn btn-primary m-2">
                All
            </button>

            <button class="btn btn-outline-primary m-2">
                Web Design
            </button>

            <button class="btn btn-outline-primary m-2">
                Laravel
            </button>

            <button class="btn btn-outline-primary m-2">
                E-Commerce
            </button>

        </div>

        <!-- Portfolio Grid -->
        <div class="row g-4">

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow portfolio-card h-100">

                    <div class="portfolio-img">

                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
                             class="card-img-top"
                             alt="Project">

                    </div>

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Business Website
                        </h4>

                        <p class="text-muted">
                            Professional corporate Laravel website
                            with responsive Bootstrap design.
                        </p>

                        <a href="#" class="btn btn-primary">
                            View Project
                        </a>

                    </div>

                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow portfolio-card h-100">

                    <div class="portfolio-img">

                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f"
                             class="card-img-top"
                             alt="Project">

                    </div>

                    <div class="card-body">

                        <h4 class="fw-bold">
                            E-Commerce Store
                        </h4>

                        <p class="text-muted">
                            Online shopping website with secure
                            payment gateway integration.
                        </p>

                        <a href="#" class="btn btn-success">
                            View Project
                        </a>

                    </div>

                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow portfolio-card h-100">

                    <div class="portfolio-img">

                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                             class="card-img-top"
                             alt="Project">

                    </div>

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Dashboard System
                        </h4>

                        <p class="text-muted">
                            Admin dashboard with charts, analytics,
                            and modern UI components.
                        </p>

                        <a href="#" class="btn btn-danger">
                            View Project
                        </a>

                    </div>

                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow portfolio-card h-100">

                    <div class="portfolio-img">

                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d"
                             class="card-img-top"
                             alt="Project">

                    </div>

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Startup Landing Page
                        </h4>

                        <p class="text-muted">
                            Clean and responsive startup website
                            with animations and SEO optimization.
                        </p>

                        <a href="#" class="btn btn-warning">
                            View Project
                        </a>

                    </div>

                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow portfolio-card h-100">

                    <div class="portfolio-img">

                        <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d"
                             class="card-img-top"
                             alt="Project">

                    </div>

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Mobile App UI
                        </h4>

                        <p class="text-muted">
                            Beautiful mobile application interface
                            designed using Bootstrap components.
                        </p>

                        <a href="#" class="btn btn-info">
                            View Project
                        </a>

                    </div>

                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow portfolio-card h-100">

                    <div class="portfolio-img">

                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
                             class="card-img-top"
                             alt="Project">

                    </div>

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Custom CRM System
                        </h4>

                        <p class="text-muted">
                            Laravel CRM system for customer
                            management and business automation.
                        </p>

                        <a href="#" class="btn btn-dark">
                            View Project
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- Call To Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">

        <h2 class="fw-bold">
            Have a Project in Mind?
        </h2>

        <p class="lead mt-3">
            Let's build something amazing together.
        </p>

        <a href="/contact" class="btn btn-light btn-lg mt-3">
            Contact Us
        </a>

    </div>
</section>

@endsection
    
</body>
</html>