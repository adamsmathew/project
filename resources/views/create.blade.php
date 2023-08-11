<head>
   
    <h1> ENTER YOUR DETAILS</h1>
    <BR>


</BR>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<div class="container">
<form action="{{route('save')}}" method="post"enctype="multipart/form-data">
    @csrf
    
 
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name"><br>
   <!-- @error('name') <p  class="alert-danger">{{$message}}</p>@enderror -->
   @error('name') 
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"><br>
@error('email') 
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
<input type="text" class="form-control" id="dob" name="date_of_birth" aria-describedby="emailHelp" placeholder="yy-mm-dd"><br>

<input type="file" class="form-control" name="image" aria-describedby="emailHelp"><br>
  <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    
 <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>