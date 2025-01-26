<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Taurus App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
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
        <div class='w-[50%'>
            <div class="header-login flex items-center gap-2">
                <!-- <img src="build/img/logo.png" alt="logo">  -->
                <div class='w-[35px] h-[35px] rounded-full bg-essentials-primary shadow-essentials'></div>
                <div class="titulo">
                    <h1 class='text-[18px] font-semibold'>Taurus Comunity Colombia</h1>
                    <p class='text-secundary-light text-[12px] -mt-[5px]'>Software profesional Nikome CO</p>
                </div>
            </div>
            <div class="saludo my-[30px]">
                <h2 class='text-3xl'>Bienvenido Nuevamente👋</h2>
                <p class='text-[17px]'>Hoy es un excelente dia para vender, inicia sesión y sácale el jugo a tu App.</p>
            </div>

            <form action="" method="post" class='flex flex-col gap-3'>
                <div>
                    <label for="usuario" class="">Usuario:</label>
                    <div
                        class="input border border-secundary-light w-full rounded-[8px] flex justify-between items-center p-2 my-[5px]">
                        <input type="text" name="usuario" id="usuario" class='w-full focus:outline-none'
                            placeholder="Ejemplo: 123456789">
                        <span class="material-symbols-outlined text-secundary-light">assignment_ind</span>
                    </div>
                </div>
                <div>
                    <label for="usuario" class="">Contraseña:</label>
                    <div
                        class="input border border-secundary-light w-full rounded-[8px] flex justify-between items-center p-2 my-[5px]">
                        <input type="text" name="usuario" id="usuario" class='w-full focus:outline-none'
                            placeholder="Tu contraseña: ********">
                        <span class="material-symbols-outlined text-secundary-light">encrypted</span>
                    </div>
                </div>
                <div class='text-right w-full '>
                    <p class='text-[12px] text-essentials-primary'><a href="olvide_contrasenia">Olvidaste tu contraseña?</a></p>
                </div>
                <div class='flex justify-center items-center'>
                    <button type="submit" class='btn'>Iniciar sesion</button>
                </div>
            </form>
            <div class='w-full my-[30px] '>
                    <p class='text-center'>No tienes una cuenta con nosotros, <a href="contacto">contactanos</a></p>
            </div>
            <div class='w-full my-[30px] '>
                    <p class='text-center text-[12px] text-essentials-primary'>Version Deimos 1.0.0</p>
            </div>

        </div>
        <div class='w-[50%] flex justify-center items-center'>
            <img class='rounded-2xl w-[80%] h-[90%]' src="build/img/img-login.jpg" alt="back-login">
        </div>
    </section>
</body>

</html>