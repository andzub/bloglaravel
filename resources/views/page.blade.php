<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <header id="header"><!--block header-->
        <nav class="headerNav">
            <h1 class="headerNav__logo">Blog Laravel</h1>
            <ul class="headerNav__menu">
                <li class="headerNav__menu-item"><a href="">Home</a></li>
                <li class="headerNav__menu-item"><a href="">About</a></li>
            </ul>
        </nav>
    </header><!--/block header-->
    <h1>{{ $header }}</h1>
    <h3>{{ $message }}</h3>
</body>
</html>
