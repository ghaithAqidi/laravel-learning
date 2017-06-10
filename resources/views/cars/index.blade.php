<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1> Click on model for the price!</h1>
<ul>
    @foreach($cars as $car)
        <li>
            <a href="/cars/{{$car->id}}">
                {{ $car -> model }}
            </a>
        </li>
    @endforeach
</ul>
</body>

</html>