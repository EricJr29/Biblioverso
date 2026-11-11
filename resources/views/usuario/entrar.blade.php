<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioverso - Entrar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .logo {
            opacity: .2;
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

<!-- min-height permite que a página cresça para baixo conforme o conteúdo aumenta -->
<body class="d-flex flex-column flex-lg-row m-0 p-0" style="min-height: 100vh; width: 100vw; overflow-x: hidden;">

    <!-- COLUNA DA ESQUERDA: Banner / Visual -->
    <div class="col-12 col-lg-6 position-relative d-flex align-items-center justify-content-center p-5" style="background: #0372C6; min-height: 400px;">
        <div class="d-flex flex-column justify-content-between p-4 rounded w-100 h-75">
            <div class="w-100">
                <a href="/home" class="d-flex text-decoration-none text-light text-uppercase align-items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid" style="filter: grayscale(100%); height:3.2rem;">
                    <h1 class="ms-3 fs-2">Biblioverso</h1>
                </a>
            </div>
            <div>
                <h1 class="text-break text-light mb-2 fs-1">Que bom te ver de novo!</h1>
                <p class="text-break text-light fs-5 w-75">Continue de onde parou, compartilhe novas leituras e converse com outros leitores.</p>
            </div>
        </div>
        <a href="/home">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo position-absolute top-50 start-50 img-fluid h-75">
        </a>
    </div>

    <!-- COLUNA DA DIREITA: Formulário de Login -->
    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center p-5 bg-light">
        <div class="w-100" style="max-width: 450px;">
            <a class="text-decoration-none fs-5 mb-4 d-inline-block text-dark" href="/login">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left me-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg> Voltar
            </a>

            <h2 class="mb-2 fw-bold">Entrar no Biblioverso</h2>
            <p class="mb-5 fs-5 text-secondary fw-none">Insira seus dados para acessar sua conta</p>

            <form action="{{ route('entrar.usuario') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
                    <input name="email" type="email" class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input name="senha" type="password" class="form-control p-2" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 p-3 fs-5 fw-semibold mt-2 rounded-pill">Entrar</button>
            </form>
        </div>
    </div>

</body>

</html>