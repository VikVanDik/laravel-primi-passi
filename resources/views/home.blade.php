<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>First steps</title>
</head>
<body>

    <header>
       <ul>
        <li><a href="http://127.0.0.1:8000">Home</a></li>
        <li><a href="http://127.0.0.1:8000{{$forum}}">Forum</a></li>
        <li><a href="http://127.0.0.1:8000{{$links}}">Link</a></li>
        <li><a href="http://127.0.0.1:8000{{$contacts}}">Contatti</a></li>
       </ul>
    </header>

    <h1>HELLO</h1>

    <footer>Made by {{$name}} {{$surname}}</footer>
</body>
</html>
