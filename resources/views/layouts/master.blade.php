<html>
    <head>
        <title> Mandy-Tech - @yield('title')</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/master.css')}}">
    </head>
    <body>
        @section('sidebar')

        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
