<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN LAYOUT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="jumbotron text-center">
        @yield('header')
    </div>

    <div class="container">
        @yield('content')
        @yield('profile')
    </div>
    
    <div class="jumbotron text-center" style="margin-bottom:0">
        @yield('footer')
    </div>
    
</body>
</html>