<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .registration-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .registration-title {
            text-align: center;
            margin-bottom: 30px;
            color: #0d6efd;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-register {
            width: 100%;
            padding: 10px;
            font-weight: 600;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="registration-container">
            <h2 class="registration-title">Create Your Account</h2>

            <form method="POST" action="{{ route('post') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="Name" required>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required name="Email">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required name="Password">
                        <div class="form-text">Minimum 8 characters</div>
                    </div>
                    <div class="col-md-6">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required
                            name="password_confirmation">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-register">Register</button>

                <div class="login-link">
                    Already have an account? <a href="#">Login here</a>
                </div>
            </form>
            @if (session('success'))
                <div class="alert alert-success mt-5" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
