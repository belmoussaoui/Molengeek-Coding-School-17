<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volleyball</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient my-10">
        <div class="container-fluid">
            <a class="main navbar-brand" href="/">Main</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="hovermhm nav-item">
                <a class="nav-link active" href="/equipes">Equipes</a>
                </li>
                <li class="hovermhm nav-item">
                <a class="nav-link active" href="/joueurs">Joueurs</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>
    
    <footer class="bg-dark bg-gradient py-3 mt-5">
        <hr>
        <h3 class="text-white text-center " >Footer de dingue</h3>
        <p class="text-white text-center">copyright Bilal and Salim</p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>