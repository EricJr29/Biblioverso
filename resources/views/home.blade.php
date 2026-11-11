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
            <a class="navbar-brand me-4" href="home"><img class="img-fluid" src=" {{ asset('images/logo.png') }} " alt="Logo" style="height: 3rem;"></a>
            <a class="navbar-brand me-4" href="home">Biblioverso</a>


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

                    @auth
                    <a class="nav-link mx-1 text-dark" aria-current="page" href="/configuracoes"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                        </svg></a>

                    <a class="nav-link rounded border border-primary border-2 p-0 overflow-hidden d-flex align-items-center justify-content-center" style="width: 2.8rem; height: 2.8rem;" href="/perfil">
                        @if(auth()->user()->imagem)
                        <img src="{{ asset('storage/' . auth()->user()->imagem) }}" class="w-100 h-100" style="object-fit: cover;" alt="Foto de perfil">
                        @else
                        <img src="{{ asset('images/default-avatar.jpg') }}" class="w-100 h-100" style="object-fit: cover; filter: grayscale(100%);" alt="Foto de perfil padrão">
                        @endif
                    </a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-2 text-primary fw-medium" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Olá, {{auth()->user()->nome}}!
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                            <li><a class="dropdown-item" href="/perfil"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg> Meu Perfil</a></li>
                            <li><a class="dropdown-item" href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                                    </svg> Sair</a></li>
                        </ul>
                    </li>

                    @else
                    <a class="nav-link active text-primary fw-bold  " aria-current="page" href="login">Entrar</a>
                    @endauth
                </ul>
            </div>

        </div>
    </nav>
    @guest
    <div class="mb-4 container-fluid pt-4 pb-3" style="margin-top: 6rem; background-color:#BAE0FD;">
        <section>
            <div class="container-fluid d-flex justify-content-center gap-3 w-75">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid" style=" height:5rem;">
                <div class="w-50">
                    <h3 class="text-dark mb-2 fs-5">A maior rede social para leitores do Brasil</h3>
                    <p class="text-secondary mb-0">
                        O Biblioverso é a comunidade perfeita para quem ama livros. Organize suas leituras e descubra novos livros, autores, editoras e amigos.
                    </p>
                </div>
                <div class=" d-flex align-items-center justify-content-center py-3">
                    <a href="/usuario/cadastrar" type="button" class="btn btn-info rounded-pill border-0 shadow-sm px-4 py-2 text-light fw-semibold">Criar minha conta</a>
                </div>
            </div>
        </section>
    </div>
    @endguest
    <div class="container-fluid py-4" 
    @auth 
    style="margin-top: 6rem;"
    @endauth>

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

    </div>

    <section class="container-fluid p-4 text-white d-flex flex-column flex-md-row justify-content-between align-items-center" style="background:#0372C6;">
        <p class="mb-md-0">&copy; 2026 Biblioverso. Todos os direitos reservados.</p>
        <div class="d-flex gap-3">
            <a href="#" class="text-white text-decoration-none">Sobre</a>
            <a href="#" class="text-white text-decoration-none">Termos</a>
            <a href="#" class="text-white text-decoration-none">Contato</a>
        </div>
    </section>
</body>

</html>