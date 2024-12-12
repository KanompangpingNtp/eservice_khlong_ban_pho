<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout-home.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container-fluid min-h-screen">
    <div class="col border container">
        <div id="header" class="row border">
            Column
        </div>
        <div class="row border">
            @yield('content')
        </div>
        <div id="footer" class="row border">
            Column
        </div>
    </div>
</div>
</body>

</html>
