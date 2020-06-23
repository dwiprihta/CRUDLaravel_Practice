<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<title>Sistem Informasi Mahasiswa</title>
</head>
<body>

 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
 <div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse"
 data-target="#navbar" >
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbar">
 <ul class="navbar-nav mr-auto">
<li class="nav-item">
 <a class="nav-link" href="{{url('/daftar-mahasiswa')}}">
Daftar Mahasiswa
 </a>
 </li>
 <li class="nav-item">
<a class="nav-link" href="{{url('/tabel-mahasiswa')}}"> Tabel Mahasiswa
 </a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="{{url('/blog-mahasiswa')}}">
 Blog Mahasiswa
 </a>
 </li>
 </ul>
 <ul class="navbar-nav">
 <li class="nav-item">
<span class="text-light">Hello, {{ session('username')}} </span>
<a class="nav-link d-inline" href="{{url('/logout')}}">Logout</a>
 </li>
 </ul>
 </div>
 </div>
 </nav>

 <div class="container">
 <h2 class="text-center my-4">{{$judul}}</h2>
 <hr>

 </div>
 <script src="/js/jquery-3.3.1.slim.min.js"></script>
 <script src="/js/popper.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
 </body>
 </html>