<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css')}}/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/584999f8a5.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">Universitas Hasanuddin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/form')}}">Tambah Data</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('container');
</body>

</html>