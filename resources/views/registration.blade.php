<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
   @extends('layouts.app')

<!-- @section('content') -->
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
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success w-100">
                            Register
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection 
</body>
</html>