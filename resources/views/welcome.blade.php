<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Taurus App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<!--  -->

<body class="flex justify-center items-center py-[60px] px-[100px] w-full min-h-[100vh]">
    <section class='relative flex justify-between w-full h-[100vh]'>
        <div class='w-[50%] bg-blue-800'>
            <div class="header-login flex items-center gap-2">
                <!-- <img src="build/img/logo.png" alt="logo">  -->
                <div class='w-[35px] h-[35px] rounded-full bg-machine-primary'></div>
                <div class="titulo">
                    <h1 class='text-[18px] font-semibold'>Taurus Comunity CO</h1>
                    <p class='text-secundary-light text-[12px] -mt-[5px]'>Software profesional Machine App</p>
                </div>
            </div>
        </div>
        <div class='w-[50%] flex justify-center items-center'>
            <img class='rounded-2xl w-[80%] h-[90%]' src="build/img/img-login.jpg" alt="back-login">
        </div>
    </section>
</body>

</html>