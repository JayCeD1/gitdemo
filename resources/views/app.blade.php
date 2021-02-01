<!doctype html>
<html lang="en">
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <title>Clocking</title>
    <body class="bg-light">
        <nav class="navbar navbar-light navbar-expand-lg bg-success p-3">
            <div class="text-light ml-5">
                <a class="navbar-brand text-light" href="">Clocking</a>
                <br>
                <span>email@clocking.com</span>
                <span>(admin)</span>
            </div>
            

            <div class="collapse navbar-collapse mr-5">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Report</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Log Out</a>
                    </li>
                </ul>
            </div>
            
        </nav>
        @yield('content')
    </body>
</html>