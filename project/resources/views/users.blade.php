<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h3>Użytkownicy</h3>
    Imie i nazwisko: {{$firstName}}, {{$lastName}} <br>
    Miasto: {{$city}}<br>
    Hobby: <ul> @foreach ($hobby as $x)
        <li> {{$x}} </li>
        @endforeach
    </ul>
</body>
</html>