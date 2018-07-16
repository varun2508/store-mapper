<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Store mapper app challenge</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/css/app.css">
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <ul class="nav navbar">
                        <a href="{{ url('stores') }}">
                            <input type="button" value="Stores" class="btn btn-outline-success">
                        </a>&nbsp;
                        <a href="{{ url('map') }}">
                            <input type="button" value="Map" class="btn btn-outline-success">
                        </a>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <h3>@yield('title')</h3>
            </div>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
