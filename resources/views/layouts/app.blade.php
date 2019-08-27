<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','MiWeb')</title>
  </head>
  <body>
    <ul>
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('projects')}}">Projects</a></li>
      <li><a href="{{route('contact')}}">Contact</a></li>
      <li><a href="{{route('about')}}">About</a></li>
    </ul>
    <hr>
    @yield('content')
  </body>
</html>