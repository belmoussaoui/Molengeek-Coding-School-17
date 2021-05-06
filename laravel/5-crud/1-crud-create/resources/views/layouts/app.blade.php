<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="/user">User</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/bibliotheque">Bibliotheque</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/livre">Livre</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/image">Image</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    
    <main class="container my-5">
        @yield("content")
    </main>
    
    <script src={{ asset("js/app.js") }}></script>
</body>
</html>