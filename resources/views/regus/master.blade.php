<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pendaftaran Pendakian Gunung Slamet</title>
    <style>
    div.background {
    background: url(https://www.inibaru.id/nuploads/1/umum/7pendkian-gunung-slamet.jpg) no-repeat;
    border: 2px solid black;
    width: 100%;
    height: 100%;
    background-size: 100%;
    }
    div.transbox {
      margin: 30px;
      background-color: #ffffff;
      border: 1px solid black;
      opacity: 0.8;
      background-size: cover;
    }
    div.transbox p {
      margin: 5%;
      font-weight: bold;
      color: #000000;
      background-size: cover;
    }
    </style>
@yield('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@yield('css')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="background">
    <div class="transbox">
    <nav class="navbar fixed-top bg-info">
    <a class="navbar-brand" href="/pendakis">Regu Pendakian Gunung Slamet</a>
<<<<<<< HEAD
<<<<<<< HEAD
    <div style="float: right; margin: 15px ">
        <a href="/daki"> Data Pendakian </a> ||
        <a href="/perlengkapans"> Perlengkapan Pendakian </a> ||
        <a href="/jalurs"> Jalur Pendakian </a>
    </div>
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
    @yield('nav')
</nav>
<div class="container">
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('js')
    </div>
  </div>
</div>
</body>
</html>
