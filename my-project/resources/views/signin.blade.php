<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="../css/signFrom.css">
</head>
<body>
    <h1>{{$titulo}}</h1>
    <form action="{{route('users')}}" id="sign" method="post">
        @csrf
        <div class="email">
            <label for="email">Email</label><br>
            <input type="email" placeholder="example@example.com" name="email"><br><br>
        </div>
        <div class="password">
            <label for="password">Password</label><br>
            <input type="password" placeholder="Escribe aquí tu contraseña" name="password"><br><br>
        </div>
        <button type="submit">Iniciar sessió</button>
    </form>
    <a href="{{ route('signup') }}">Sign Up</a>
</body>
</html>