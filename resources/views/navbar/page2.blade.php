<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
<header>
        <div class="navbar">
            <span><a href="{{ url('/') }}">Home</a></span>
            <span><a href="{{ route('page1') }}">Pagina 1</a></span>
            <span><a href="{{ route('page2') }}">Pagina 2</a></span>
        </div>
    </header>
    <h1>{{$name}} {{$surname}}</h1>
</body>
</html>