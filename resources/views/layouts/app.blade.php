<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Blog App')</title>
    <!-- Add your CSS files here -->
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.navbar')
    
    <div class="container">
        @yield('content')
    </div>
  

    @include('layouts.footer')
    <!-- Add your JS files here -->
</body>
</html>