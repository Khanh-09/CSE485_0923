<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default Title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
</head>
<body>
    <div class="container" style="margin-top: 15px; ">
        @yield('content')
    </div> 

<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    
</body>
</html>