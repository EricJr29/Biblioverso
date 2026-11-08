<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioverso</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .logo {
            opacity: .4;
            animation: pulsar 3s ease-in-out infinite;
            transform-origin: center center;
        }

        @keyframes pulsar {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                transform: translate(-50%, -50%) scale(1.04);
            }

            100% {
                transform: translate(-50%, -50%) scale(1);
            }
        }
    </style>
</head>

<body class="d-flex" style="background:#0372C6; height:100vh; overflow: hidden;">
    <div class="container-fluid h-100 position-relative">
        <a href="/home"><img src=" {{ asset('images/logo.png') }} " alt="logo" class="logo position-absolute top-50 start-50 img-fluid h-75"></a>
    </div>
    <div class="container-fluid">
        <section class=" container h-25 d-flex justify-content-start align-items-end">
            <div class="container-fluid d-flex w-100">
                <a href="/home" class="d-flex text-decoration-none text-light text-uppercase align-items-center">
                    <img src=" {{ asset('images/logo.png') }} " alt="logo" class="img-fluid" style="filter: grayscale(100%); height:3.2rem;">
                    <h1 class="ms-3 fs-2">Biblioverso</h1>
                </a>
            </div>

        </section>
        <section class="container h-75">
            <div class="container h-75 mt-5 d-flex flex-column gap-4 justify-content-end align-items-start">
                <div class="container-fluid">
                    <h1 class="text-break text-light mb-2 fs-1">Bem-Vindo ao Biblioverso! </h1>
                    <p class="text-break text-light fs-5 w-75">Compartilhe suas leituras, experiências e encontre outras pessoas com diferentes opiniões para conversar.</p>
                </div>
                <a href="usuario/entrar" type="button" class="btn btn-primary btn-lg rounded-pill btn-info text-light fw-medium py-3 w-75">Entrar</a>
                <a href="usuario/cadastrar" type="button" class="btn btn-primary btn-lg rounded-pill btn-light fw-medium py-3 w-75">Cadastrar</a>
            </div>

        </section>
    </div>
</body>

</html>