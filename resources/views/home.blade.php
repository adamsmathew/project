<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
</head>
<body>
    <h1>welcome to laravellllllllll</h1>

    @include('partials.menu')

    @isset($record)
    <h3>color getting</h3>
    @endisset

    @empty($record)
   <!-- <h3>color not empty</h3>-->
    @endempty
    



</body>
</html>