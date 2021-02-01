<!DOCTYPE html>
<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/global.css')}}">

        <title>Login In</title>
    </head>
    <body class="bg-white">
        <div class="card ml-auto mr-auto mt-5 bg-gray border-gray" style="width: 25rem">
            <form class="card-body" action="" method="post">
                @csrf
                <div class="card-title text-center p-3"> <h1>Sign In</h1> </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="sr-only">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row no-gutters">
                    <button type="submit" class="btn btn-success ml-auto mt-3">Login to Clocking</button>
                </div>
            </form>
        </div>
    </body>
</html>