<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pusher</title>
</head>
<body>
   <h2>welcome to laravel pusher</h2> 
   <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
   <script>
   Pusher.logToConsole = true;
   var pusher = new Pusher('a2aa5c59ff6e08cc8a63', {
       cluster: 'ap2'
   });
   var channel = pusher.subscribe('orders');
      channel.bind('new-order', function(data) {
      alert("new order recieved");
    });
    </script>

</body>
</html>