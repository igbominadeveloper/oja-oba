<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nephos :: Modern Bulma Ecommerce App and Dashboard</title>

    <link rel="icon" type="image/png" href="/nephos/images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.main')
        <router-view></router-view>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bulma.js') }}"></script>
</body>
</html>