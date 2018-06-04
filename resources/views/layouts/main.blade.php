<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="Name: Baltazar Nunez, Location: Sacramento, Ca, Skills: Making fully responsive webpages, Title: Web Developer">
    <meta name="og:title" content="Baltazar Nunez || Web Developer">
    <meta name="og:image" content="/img/myself.jpg">
    <link rel="shortcut icon" href="/img/logo1.png" type="image/png">
    <link rel="icon" type="image/png" href="/img/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  </head>
  <body>
    @yield('content')
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
