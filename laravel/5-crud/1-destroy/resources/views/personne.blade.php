<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <main class="container mt-3">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Genre</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnes as $p)
                <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $p->nom }}</td>
                    <td>{{ $p->prénom }}</td>
                    <td>{{ $p->age }}</td>
                    <td>{{ $p->ddn }}</td>
                    <td>{{ $p->genre === 1 ? 'Homme' : 'Femme' }}</td>
                    <td>
                        <form action="/personne/{{ $p->id }}/delete" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>

    </main>
    
</body>
</html>