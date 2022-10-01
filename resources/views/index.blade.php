<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin: 50px auto; width:80%;">
        @foreach ($users as $value)
            <h2>{{$value->name}}</h2>
            <h4>{{$value->addresses->country}}</h4>
        @endforeach
    </div>
</body>
</html>