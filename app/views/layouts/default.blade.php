<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Larabook</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body style="padding-top:70px;">

    @include('layouts.partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <script type="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>