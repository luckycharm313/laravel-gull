<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Scripts -->
    
    <!--lpk-->
    @stack('head')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    @yield('extra_style')
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--lpk-->   

</head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item mx-1 active">
              <a class="nav-link" href="{{route('vehicle')}}">Find a Vehicle <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link mx-1" href="{{route('vehicle')}}">My Loads</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="{{route('vehicle')}}">Notifications</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="{{route('vehicle')}}">Account</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="{{route('vehicle')}}">Help</a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="py-4">
          @yield('content')
      </main>
    </div>
</body>
</html>
