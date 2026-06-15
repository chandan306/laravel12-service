<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>register</title>
        <style>
            #captcha-img img {
                width: 150px;
                height: 50px;
            }
        </style>
    </head>
    <body>
        @extends('layouts.app')

        <!-- @section('content') -->

        <style>
            #captcha-img img {
                width: 190px;
                height: 50px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
        </style>

        <div class="container mt-5 mt-50">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h4>User Registration</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" />
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" />
                                </div>

                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" />
                                </div>

                                <div class="mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" />
                                </div>

                                <div class="mb-3 row align-items-center">
                                    <label class="col-md-3 col-form-label">
                                        Captcha <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-md-4">
                                        <input
                                            type="text"
                                            name="captcha"
                                            class="form-control"
                                            placeholder="Enter Captcha"
                                            required
                                        />
                                    </div>

                                    <div class="col-md-4">
                                        <span id="captcha-img"> {!! captcha_img() !!} </span>
                                    </div>

                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-secondary" id="reload">↻</button>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success w-100">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#reload").click(function () {
                    $.ajax({
                        type: "GET",
                        url: "/refresh-captcha",
                        success: function (data) {
                            $("#captcha-img").html(data.captcha);
                        },
                    });
                });
            });
        </script>
    </body>
    @endsection
</html>
