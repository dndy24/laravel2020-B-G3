<!DOCTYPE html>
<html lang="en">
<div class="background">
  <div class="transbox">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pendataan Jalur Pendakian Gunung Slamet</title>
    <style>
    div.background {
    background: url(https://www.inibaru.id/nuploads/1/umum/7pendkian-gunung-slamet.jpg) no-repeat;
    border: 3px solid black;
    background-size: cover; 
    }

    div.transbox {
      margin: 30px;
      background-color: #ffffff;
      border: 1px solid black;
      opacity: 0.8;
    }

    div.transbox p {
      font-weight: bold;
      color: #000000;
      background-size: cover;
    }
    </style>
@yield('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@yield('css')
  </head>
  <body>
    <nav class="navbar fixed-top bg-info">
      <a class="navbar-brand" href="/jalurs">Jalur Pendakian Gunung Slamet</a>
      <div style="margin: 15px; text-align: right;">
          <a href="/dakis"> Data Pendaki </a> ||
          <a href="/regus"> Regu Pendakian </a> ||
          <a href="/perlengkapans"> Perlengkapan Regu </a>
      </div>
      @yield('nav')
    </nav>
    <div class="container">
    @yield('content')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @yield('js')
    </div>
  </body>
  </div>
</div>
</html>