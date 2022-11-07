<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Laravel - CRUD</title>
</head>

<body>

    <h1>CRUD</h1>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Copertina</th>
                    <th>Prezzo</th>
                </tr>
            </thead>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic['title'] }}</td>
                    <td>{{ $comic['description'] }}</td>
                    <td>{{ $comic['thumb'] }}</td>
                    <td>{{ $comic['price'] }}</td>
            @endforeach
            </tr>
        </table>
    </div>
</body>

</html>
