<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>hello {{$user->name}}</h2>
   <h4>please click the below link to reset your password</h4>
   <a href="{{route('resetpassword',$token)}}">Reset Password Now</a>
</body>
</html>