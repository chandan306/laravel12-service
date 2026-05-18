<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
</head>
<body>
@extends('layouts.app')
@section('content')

<!-- Page Header -->
<section class="bg-primary text-white py-5 mt-50">
    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Our Services
        </h1>

        <p class="lead">
            Professional Laravel & Bootstrap Development Services
        </p>

    </div>
</section>

<!-- Services Section -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow service-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="mb-4">
                            <i class="bi bi-code-slash display-3 text-primary"></i>
                        </div>

                        <h3 class="fw-bold">
                            Web Development
                        </h3>

                        <p class="text-muted">
                            Custom Laravel websites with secure backend
                            and modern frontend design.
                        </p>

                        <a href="#" class="btn btn-primary mt-3">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow service-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="mb-4">
                            <i class="bi bi-phone display-3 text-success"></i>
                        </div>

                        <h3 class="fw-bold">
                            Responsive Design
                        </h3>

                        <p class="text-muted">
                            Mobile-friendly Bootstrap 5 websites
                            optimized for all devices.
                        </p>

                        <a href="#" class="btn btn-success mt-3">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow service-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="mb-4">
                            <i class="bi bi-cart-check display-3 text-danger"></i>
                        </div>

                        <h3 class="fw-bold">
                            E-Commerce
                        </h3>

                        <p class="text-muted">
                            Online shopping websites with payment
                            gateway integration.
                        </p>

                        <a href="#" class="btn btn-danger mt-3">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow service-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="mb-4">
                            <i class="bi bi-speedometer2 display-3 text-warning"></i>
                        </div>

                        <h3 class="fw-bold">
                            Performance Optimization
                        </h3>

                        <p class="text-muted">
                            Fast loading and optimized websites
                            for better user experience.
                        </p>

                        <a href="#" class="btn btn-warning mt-3">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow service-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="mb-4">
                            <i class="bi bi-shield-lock display-3 text-info"></i>
                        </div>

                        <h3 class="fw-bold">
                            Website Security
                        </h3>

                        <p class="text-muted">
                            Secure authentication systems and
                            advanced website protection.
                        </p>

                        <a href="#" class="btn btn-info mt-3">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow service-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="mb-4">
                            <i class="bi bi-graph-up-arrow display-3 text-dark"></i>
                        </div>

                        <h3 class="fw-bold">
                            SEO Optimization
                        </h3>

                        <p class="text-muted">
                            Improve website ranking and visibility
                            on search engines.
                        </p>

                        <a href="#" class="btn btn-dark mt-3">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- Pricing Section -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Pricing Plans
            </h2>

            <p class="text-muted">
                Choose the best package for your business
            </p>

        </div>

        <div class="row g-4">

            <!-- Basic -->
            <div class="col-lg-4">

                <div class="card border-0 shadow text-center h-100">

                    <div class="card-body p-5">

                        <h3 class="fw-bold">
                            Basic
                        </h3>

                        <h1 class="display-5 text-primary my-4">
                            $99
                        </h1>

                        <ul class="list-unstyled mb-4">

                            <li class="mb-2">1 Page Website</li>
                            <li class="mb-2">Responsive Design</li>
                            <li class="mb-2">Basic SEO</li>
                            <li class="mb-2">Free Support</li>

                        </ul>

                        <a href="#" class="btn btn-primary w-100">
                            Choose Plan
                        </a>

                    </div>

                </div>

            </div>

            <!-- Standard -->
            <div class="col-lg-4">

                <div class="card border-0 shadow text-center h-100">

                    <div class="card-body p-5">

                        <h3 class="fw-bold">
                            Standard
                        </h3>

                        <h1 class="display-5 text-success my-4">
                            $299
                        </h1>

                        <ul class="list-unstyled mb-4">

                            <li class="mb-2">5 Page Website</li>
                            <li class="mb-2">Admin Panel</li>
                            <li class="mb-2">SEO Optimization</li>
                            <li class="mb-2">Premium Support</li>

                        </ul>

                        <a href="#" class="btn btn-success w-100">
                            Choose Plan
                        </a>

                    </div>

                </div>

            </div>

            <!-- Premium -->
            <div class="col-lg-4">

                <div class="card border-0 shadow text-center h-100">

                    <div class="card-body p-5">

                        <h3 class="fw-bold">
                            Premium
                        </h3>

                        <h1 class="display-5 text-danger my-4">
                            $599
                        </h1>

                        <ul class="list-unstyled mb-4">

                            <li class="mb-2">Custom Website</li>
                            <li class="mb-2">API Integration</li>
                            <li class="mb-2">Advanced Security</li>
                            <li class="mb-2">24/7 Support</li>

                        </ul>

                        <a href="#" class="btn btn-danger w-100">
                            Choose Plan
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection
</body>
</html>