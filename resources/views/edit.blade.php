<head>
   
    <h1> UPDATE YOUR DETAILS</h1>
    <BR>


</BR>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<div class="container">
<form action="{{ route('update') }}" method="post">
    @csrf
 <input type="hidden"name="user_id" value="{{encrypt($user->user_id)}}">
    <input type="text" class="form-control" value="{{$user->name}}" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name"><br>
<input type="email" class="form-control" value="{{$user->email}}"id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"><br>
<input type="text" class="form-control"value="{{$user->date_of_birth}}" id="dob" name="date_of_birth" aria-describedby="emailHelp" placeholder="yy-mm-dd"><br>

<div class="form-group">
            <label for="status">Status</label>
            <select id="status" value="{{$user->status}}" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
  
    
 <br>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>