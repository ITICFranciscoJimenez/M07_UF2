<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
</head>
<body>
    <h1>{{$titulo}}</h1>
    <form action="{{url('/api/createUser')}}">
        <div class="name">
            <label for="name">Nom</label><br>
            <input type="text" placeholder="Insereix aquí el teu nom"><br>
        </div>
        <div class="surname">
            <label for="surname">Cognom</label><br>
            <input type="text" placeholder="Insereix aquí el teu cognom"><br>
        </div>
        <div class="email">
            <label for="email">Email</label><br>
            <input type="email" placeholder="example@example.com"><br>
        </div>
        <div class="password">
            <label for="password">Contrasenya</label><br>
            <input type="password" placeholder="Insereix aquí la seva contraseña"><br><br>
        </div>
        <div class="submit">
            <button type="submit">Sign Up!</button>
        </div>
    </form>
    <br><a href="{{ route('signin') }}">Sing in</a>
</body>
</html>