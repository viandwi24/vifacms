<!DOCTYPE html>
<html lang="en">
<head>
    <title>VIFACMS ADMIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.baseurl= "{{ url('/') }}";</script>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div id="app"></div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>