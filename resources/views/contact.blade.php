<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     @extends('layouts.app')

    <!-- Contact Section -->
    <section class="bg-info text-white py-5 mt-50">
        <div class="container">
            
            <div class="text-center mb-5">
                <h1 class="fw-bold">Contact Us</h1>
                <p class="text-light">
                    If you have any questions, feel free to contact us.
                </p>
            </div>

            <div class="row">
                
                <!-- Contact Form -->
                <div class="col-md-7">
                    <div class="card p-4 shadow">
                        
                        <form>
                            
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Enter subject">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-danger w-100">
                                Send Message
                            </button>

                        </form>

                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-md-5 mt-4 mt-md-0">
                    
                    <div class="p-4 bg-danger rounded shadow">
                        <h3>Contact Information</h3>
                        <hr>

                        <p><strong>Email:</strong> info@example.com</p>
                        <p><strong>Phone:</strong> +91 9876543210</p>
                        <p><strong>Address:</strong> Delhi, India</p>

                    </div>

                </div>

            </div>

        </div>
    </section>

</body>
</html>