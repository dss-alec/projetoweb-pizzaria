<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens enviadas</title>
</head>
<body>
    <h1>Lista de Mensagens</h1>

    <ul>
        @foreach ($mensagens as $mensagem)
            <li>
                <strong>{{ $mensagem->nome }}</strong> — {{ $mensagem->mensagem }}
            </li>
        @endforeach
    </ul>
</body>
</html>