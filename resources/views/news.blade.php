<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box">
    <header style="height: 100px; width: 100%; background-color: lightgrey; display: flex; justify-content:center;">
        <ul style="list-style:none; display: flex; justify-content:center;">
            @foreach ($navBarLinks as $navBarLink)
                <li style="padding: 10px"><a href="{{route($navBarLink)}}">{{$navBarLink}}</a></li>
            @endforeach
        </ul>
    </header>
    <h1 style="text-align: center">This is the news page!</h1>
</body>
</html>
