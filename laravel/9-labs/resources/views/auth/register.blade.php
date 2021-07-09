<html lang="en"><head>
    <link rel="stylesheet" href="{{  asset("css/style.css")  }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Egf54wyRT8Rg8OZW9CA4jr6Y97FPRYHor1p67fME">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">

    <!-- Scripts -->
    <script src="js/app.js" defer=""></script>
</head>
<body>
    <div class="font-sans">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 about-section">
            <div class="overlay"></div>
            <div>
                <a href="/">
                </a>
            </div>



<div class="z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
    <form method="POST" action="/register">
        @csrf
         <a href="/">
        <img class="my-6 mx-auto" src="img/logo.png" alt="">
        </a>
        <!-- Name -->
        <div>
            <label class="block font-medium text-sm text-gray-700" for="name">Name</label>

            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="name" type="text" name="name" required="required" autofocus="autofocus">
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="email">Email</label>

            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="email" type="email" name="email" required="required">
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="password">Password</label>

            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password">
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="password_confirmation">Confirm Password</label>

            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required">
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://127.0.0.1:8000/login">
                Already registered?
            </a>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4">Register</button>
        </div>
    </form>
</div>
</div>
    </div>


</body></html>
