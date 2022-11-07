<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - CRUD</title>
</head>

<body>

    <h1>CRUD</h1>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Casa editrice</th>
                    <th>Lingua originale</th>
                    <th>Autore</th>
                </tr>
            </thead>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic['titolo'] }}</td>
                    <td>{{ $comic['casa_editrice'] }}</td>
                    <td>{{ $comic['lingua_originale'] }}</td>
                    <td>{{ $comic['autore'] }}</td>
            @endforeach
            </tr>
        </table>
    </div>
</body>

</html>
