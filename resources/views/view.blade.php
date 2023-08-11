<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>USER DETAILS</h1>
        <br>
        <ul>
            <li>Name: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
            <li>Status: {{ $user->status }}</li>
        </ul>
        <hr>
        <ul>
            <li>Address line 1: {{ $user->address->adress_line_1 }}</li>
            <li>City: {{ $user->address->city }}</li>
        </ul>
        <hr>
        <h2>Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>OrderId</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Placed At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->orders as $order) <!-- Corrected foreach loop variable name -->
                    <tr>
                        <td>{{ $order->order_id }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>




<!--</BR>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<div class="container">
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name"><br>
<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"><br>
<input type="text" class="form-control" id="dob" name="date_of_birth" aria-describedby="emailHelp" placeholder="yy-mm-dd"><br>


  <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
</form>
</div> -->