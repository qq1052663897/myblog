<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('catty.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>My little space ~ </title>
</head>
<body>
    <div class="container max-auto px-4 origin-center">
        <div class="w-24 h-24 origin-center">111-{{ env('APP_IP') }}</div>
    </div>
</body>
</html>
