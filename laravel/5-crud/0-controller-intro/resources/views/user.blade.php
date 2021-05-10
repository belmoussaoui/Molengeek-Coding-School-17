<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    @foreach ($users as $user)
        <p>{{ $user->name . " " . $user->email }}</p> 
        <form action="/user/{{ $user->id }}/delete" method="POST">
            {{-- pour sécuriser le formulaire. personne d'autre ne peut executer ce code (certification laravel) --}}
            @csrf 
            <button type="submit">delete</button>
        </form>
    @endforeach
</body>
</html>