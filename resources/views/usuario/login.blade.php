<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioverso</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex" style="background:#0372C6; height:100vh;">
    <div class="container-fluid bg-dark h-100">
        <img src=" {{ asset('images/logo.png') }} " alt="logo">
    </div>
    <div class="container-fluid">
        <a href="usuario/entrar">Cu Entrar</a> <br>
        <a href="usuario/cadastrar">Cu Cadastrar</a>
    </div>
</body>
</html>