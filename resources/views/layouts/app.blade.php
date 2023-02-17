<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('section', 'title') </title>
    <meta property="og:image" content="../assets/img/pexels-uriel-mont-6280957.jpg">
    <meta name="twitter:title" content="MusicApp">
    <meta property="og:description" content="write description here">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="write description here">
    <meta name="Author" content="HimanshuNishad">
    <meta name="Description" content="write description here">
    <meta name="Keywords" content="write keywords here">
    <meta name="description" content="write description here">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500,600,700,900&amp;display=swap">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
    
    @include('layouts.nav')

    <main class="main">
        @yield('content')
    </main>
  
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @livewireScripts
</body>
</html>
