<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100 antialiased text-gray-700 font-sans">
  <div id="app">
    <router-view></router-view>
  </div>

  <!-- Scripts -->
  <script>
    window.config = @json($config);
  </script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
