<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioverso </title>

    {{-- Importação do Bootstrap via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 py-3 shadow-sm fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand me-4" href="#"> <i class="bi bi-0-square-fill"></i>Biblioverso</a>

            <form class="d-flex w-25" role="search">
                <input class="form-control me-2 border-info" type="search" placeholder="Busque por títulos ou autores" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Explorar
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                            <li><a class="dropdown-item" href="#">Livros</a></li>
                            <li><a class="dropdown-item" href="#">Autores</a></li>
                            <li><a class="dropdown-item" href="#">Editores</a></li>
                            <li><a class="dropdown-item" href="#">Leitores</a></li>
                            <li><a class="dropdown-item" href="#">Top Mais</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fw-bold  " aria-current="page" href="#">Entrar</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="mb-5 container-fluid pt-4 pb-3" style="margin-top: 6rem; background-color:#BAE0FD;">
        <section>
            <div class="container-fluid d-flex justify-content-center gap-3 w-75">
                <div class="w-50">
                    <h3 class="text-dark mb-2 fs-5">A maior rede social para leitores do Brasil</h3>
                    <p class="text-secondary mb-0">
                        O Biblioverso é a comunidade perfeita para quem ama livros. Organize suas leituras e descubra novos livros, autores, editoras e amigos.
                    </p>
                </div>
                <div class=" d-flex align-items-center justify-content-center py-3">
                    <a href="#" type="button" class="btn btn-info rounded-pill border-0 shadow-sm px-4 py-2 text-light fw-semibold">Criar minha conta</a>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid py-4 mt-4">

        <!-- SEÇÃO 1: Destaque / Banner Principal (Usando Flexbox para alinhar) -->
        <section class="p-5 mb-4 bg-body-tertiary rounded-3 shadow">
            <div class="container-fluid py-2">
                <h1 class="display-5 fw-bold text-primary">Bem-vindo ao Biblioverso</h1>
                <p class="col-md-8 fs-4 text-muted">Sua rede social para descobrir, avaliar e compartilhar suas leituras favoritas.</p>
                <button class="btn btn-dark btn-lg" type="button">Explorar Livros</button>
            </div>
        </section>

        <!-- SEÇÃO 2: Grade Principal (Grid System do Bootstrap: Linha dividida em colunas) -->
        <div class="row g-4 mb-4">

            <!-- Coluna da Esquerda (Conteúdo Principal / Listagem) -->
            <div class="col-lg-8">
                <div class="p-4 bg-white border rounded-3 shadow-sm h-100">
                    <h3 class="fw-bold mb-3"><i class="bi bi-book-half text-success"></i> Livros em Destaque</h3>
                    <p class="text-muted">Aqui vai a listagem principal dos livros cadastrados no sistema.</p>

                    <!-- Exemplo de sub-seção usando Flexbox em linha para cards ou itens -->
                    <div class="d-flex flex-column gap-3 mt-3">
                        <div class="p-3 border rounded bg-light">Livro Exemplo 1 - Autor A</div>
                        <div class="p-3 border rounded bg-light">Livro Exemplo 2 - Autor B</div>
                    </div>
                </div>
            </div>

            <!-- Coluna da Direita (Sidebar / Lateral) -->
            <div class="col-lg-4">
                <div class="p-4 bg-white border rounded-3 shadow-sm h-100">
                    <h4 class="fw-bold mb-3"><i class="bi bi-fire text-danger"></i> Mais Lidos</h4>
                    <p class="text-muted text-start">Ranking da galera da comunidade.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. O Senhor dos Anéis</li>
                        <li class="list-group-item">2. Dom Casmurro</li>
                        <li class="list-group-item">3. 1984</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- SEÇÃO 3: Rodapé / Seção Inferior (Alinhado com flex space-between) -->
        <section class="p-4 bg-dark text-white rounded-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="mb-md-0">&copy; 2026 Biblioverso. Todos os direitos reservados.</p>
            <div class="d-flex gap-3">
                <a href="#" class="text-white text-decoration-none">Sobre</a>
                <a href="#" class="text-white text-decoration-none">Termos</a>
                <a href="#" class="text-white text-decoration-none">Contato</a>
            </div>
        </section>

    </div>

</body>

</html>