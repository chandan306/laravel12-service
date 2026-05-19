<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app') @section('content')

<!-- Page Header -->
<section class="bg-primary text-white py-5 mt-50">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Contact Us</h1>

        <p class="lead">Get in touch with us for your next project</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <h2 class="fw-bold mb-4">Send Message</h2>

                        <form>
                            <div class="mb-3">
                                <label class="form-label"> Full Name </label>

                                <input type="text" class="form-control" placeholder="Enter your name" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Email Address </label>

                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Mobile No </label>

                                <input type="numbar" class="form-control" placeholder="Enter your Mobile No" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Subject </label>

                                <input type="text" class="form-control" placeholder="Enter subject" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Message </label>

                                <textarea class="form-control" rows="7" placeholder="Write your message"></textarea>
                            </div>

                            <button class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-4">
                        <h2 class="fw-bold mb-4">Contact Information</h2>

                        <div class="mb-4 d-flex">
                            <div class="me-3">
                                <i class="bi bi-geo-alt-fill fs-2 text-primary"></i>
                            </div>

                            <div>
                                <h5 class="fw-bold">Address</h5>

                                <p class="text-muted mb-0">Delhi, India</p>
                            </div>
                        </div>

                        <div class="mb-4 d-flex">
                            <div class="me-3">
                                <i class="bi bi-envelope-fill fs-2 text-danger"></i>
                            </div>

                            <div>
                                <h5 class="fw-bold">Email</h5>

                                <p class="text-muted mb-0">info@example.com</p>
                            </div>
                        </div>

                        <div class="mb-4 d-flex">
                            <div class="me-3">
                                <i class="bi bi-telephone-fill fs-2 text-success"></i>
                            </div>

                            <div>
                                <h5 class="fw-bold">Phone</h5>

                                <p class="text-muted mb-0">+91 9876543210</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Google Map -->
                <div class="card border-0 shadow">
                    <div class="card-body p-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.4813158436!2d76.76357805!3d28.6436846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d047309fff8ff%3A0xf5c3d1f5f0f0f0f0!2sDelhi!5e0!3m2!1sen!2sin!4v1716100000000!5m2!1sen!2sin"
                            width="100%"
                            height="340"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                        >
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
</body>
</html>