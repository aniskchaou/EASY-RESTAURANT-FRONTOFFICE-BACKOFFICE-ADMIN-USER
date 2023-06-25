<html lang="en">
<head>
 @include('includes.head')
</head>
<body>
    <!--============ Navigation ============-->
    @include('includes.header')

    <!--============ Slider ============-->
    @yield('content')
    
    <!--============ Footer ============-->
    @include('includes.footer')
</body>
</html>
