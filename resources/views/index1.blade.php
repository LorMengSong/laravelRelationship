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
        @foreach ($addresses as $value)
            <h2>{{$value->country}}</h2>
            <h2>{{$value->getUser->email}}</h2>
            <h2>{{$value->getUser->name}}</h2>
            
        @endforeach
    </div>
</body>
</html>