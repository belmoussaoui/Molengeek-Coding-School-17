<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    {{-- asset va directement chercher dans le dossier public --}}
    <h1 class="bg-primary">je suis un h1</h1>
</head>
<body>
    <script src={{ asset("js/app.js") }}></script>
</body>
</html>