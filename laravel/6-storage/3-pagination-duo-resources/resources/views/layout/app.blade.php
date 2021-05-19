<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>
<body>
    <div class="wrapper">
        @include('partials.navbar')
        
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col">
                        <div class="container-fluid mt--7">
                            @yield('content')
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

    </div>



    
    

    <script src={{ asset('js/app.js') }}></script>
</body>
</html>