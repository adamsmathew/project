<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>WELCOME TO LARAVEL</h1> 
  <br>
  <ul>
  <li><a href="{{route('home')}}">Home</a></li>
  <li><a href="{{route('abt')}}">About Us</a></li>
  <li><a href="{{route('cnt')}}">Contact Us</a></li>
</ul>
</ul>

<!--<!DOCTYPE html>
<html lang="en">
<head>-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
</head>
<body>
  <h3>Welcome {{auth()->user()->name}}</h3>
   
    <h2>Users</h2>      

    <a href="{{route('crt')}}"class="btn btn-primary">New</a>
    <a href="{{route('logout')}}"class="btn btn-danger" style="float:right">logout</a>
    <a href="{{route('pdf')}}"class="btn btn-success" >pdf</a>
   


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$users->firstItem() + $loop->index}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->status}}</td>
      <td>

      <a href="{{ route('edt',$user->user_id)}}" class="btn btn-primary">Edit</a>

      <a href="{{ route('delete',encrypt($user->user_id)) }}" class="btn btn-danger">Delete</a>

      <a href="{{ route('fdt',encrypt($user->user_id)) }}" class="btn btn-info">Force Delete</a>

      <a href="{{ route('view',encrypt($user->user_id)) }}" class="btn btn-warning">view</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
{{ $users->links() }}
</div>
</body>
</html>