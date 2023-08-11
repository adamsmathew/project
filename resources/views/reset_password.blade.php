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
                        <h3 class="card-title text-center">Reset Password </h3>
    

                       <form action="{{route('doresetpassword')}}"method="post">  
                           @csrf
                                <input type="hidden"name="user_id" value="{{encrypt($user->user_id)}}">

                         
                            <div class="form-group">
                                <label for="email">New Password</label>
                                <input type="password"name="password" id="floatingInput" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Confirm Password</label>
                                <input type="password"name="c_password" id="floatingInput" class="form-control" required>
                            </div>


                         <br>
                          
                            <!-- Sign In button -->
                            <button type="submit" class="btn btn-primary btn-block"style="float:right">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>