@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<!-- Hero Slider -->
<section class="hero-slider">

    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>

            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>

            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner mt-50" >

            <!-- Slide 1 -->
            <div class="carousel-item active">

                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
                     class="d-block w-100 slider-img"
                     alt="Slider Image">

                <div class="carousel-caption d-flex flex-column justify-content-center h-100">

                    <h1 class="display-3 fw-bold">
                        Professional Softwere Services Website
                    </h1>

                    <p class="lead">
                        Fully Responsive Bootstrap 5 Website
                    </p>

                    <div>
                        <a href="/contact" class="btn btn-primary btn-lg">
                            Contact Us
                        </a>
                    </div>

                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">

                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f"
                     class="d-block w-100 slider-img"
                     alt="Slider Image">

                <div class="carousel-caption d-flex flex-column justify-content-center h-100">

                    <h1 class="display-3 fw-bold">
                        Modern Web Design
                    </h1>

                    <p class="lead">
                        Clean and Professional UI Design
                    </p>

                    <div>
                        <a href="/services" class="btn btn-success btn-lg">
                            Our Services
                        </a>
                    </div>

                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">

                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                     class="d-block w-100 slider-img"
                     alt="Slider Image">

                <div class="carousel-caption d-flex flex-column justify-content-center h-100">

                    <h1 class="display-3 fw-bold">
                        Responsive Bootstrap 5
                    </h1>

                    <p class="lead">
                        Mobile Friendly Professional Website
                    </p>

                    <div>
                        <a href="/portfolio" class="btn btn-danger btn-lg">
                            View Portfolio
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

</section>

<!-- About -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h2>About Us</h2>

                <p>
                    We create modern Laravel websites with responsive design.
                </p>

                <a href="/about" class="btn btn-primary">
                    Read More
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Services -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2>Our Services</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card h-100 shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-code-slash fs-1 text-primary"></i>

                        <h4 class="mt-3">Web Development</h4>

                        <p>
                            Laravel custom website development.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card h-100 shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-phone fs-1 text-success"></i>

                        <h4 class="mt-3">Responsive Design</h4>

                        <p>
                            Mobile friendly Bootstrap websites.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card h-100 shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-speedometer2 fs-1 text-danger"></i>

                        <h4 class="mt-3">Fast Performance</h4>

                        <p>
                            Optimized and secure applications.
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card service-card h-100 shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-code-slash fs-1 text-primary"></i>

                        <h4 class="mt-3">Web Development</h4>

                        <p>
                            Laravel custom website development.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card h-100 shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-phone fs-1 text-success"></i>

                        <h4 class="mt-3">Responsive Design</h4>

                        <p>
                            Mobile friendly Bootstrap websites.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card h-100 shadow">
                    <div class="card-body text-center">
                        <i class="bi bi-speedometer2 fs-1 text-danger"></i>
                           <h4 class="mt-3">Fast Performance</h4>
                        <p>
                            Optimized and secure applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="py-5">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                <h2>Contact Us</h2>

                <form>

                    <div class="mb-3">
                        <input type="text"
                               class="form-control"
                               placeholder="Your Name">
                    </div>

                    <div class="mb-3">
                        <input type="email"
                               class="form-control"
                               placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control"
                                  rows="5"
                                  placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-primary">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection