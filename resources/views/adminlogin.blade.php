<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@if (session()->has('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"> Admin Login </h3>
    

                        <form action="{{route('admindologin')}}"method="post">
                           @csrf
                            <!-- Email input -->
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email"name="email" id="email" class="form-control" required>
                            </div>

                            <!-- Password input -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"name="password" id="password" class="form-control" required>
                            </div>
                           <br>

                           <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>

                            <!-- Sign In button -->
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
