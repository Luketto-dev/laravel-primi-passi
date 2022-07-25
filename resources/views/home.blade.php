<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-primi-passi</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('chi-siamo')}}">chi siamo</a></li>
                <li><a href="{{route('prodotti')}}">prdotti</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h2>Lista utenti</h2>
            @if (count($users) > 0)
            <ul class="users-list">
                @foreach ($users as $user)
                    <li class="user">
                        {{ $user['name'] }} {{ $user['surname'] }}
                        @if ($user['role'] === 'admin')
                            <strong>Amministratore del siuto</strong>
                        @else
                            <strong>cliente del sito</strong>
                        @endif
                    </li>
                @endforeach
            </ul>
            @else
            <h2 style="color:red">nessuno utente trovato</h2>
            @endif
        </div>
    </main>
</body>
</html>