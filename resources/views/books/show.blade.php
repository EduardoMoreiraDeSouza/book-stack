<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro - Painel de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<!-- Navegação -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
            <i class="bi bi-book me-2 fs-4"></i>
            Painel de Livros
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('books.index')}}">Livros</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteúdo Principal -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Link de Voltar -->
            <a href="{{route('books.index')}}" class="text-decoration-none mb-4 d-inline-block">← Voltar para Livros</a>

            <!-- Card de Detalhes do Livro -->
            <div class="card shadow-sm">
                <!-- Cabeçalho com gradiente -->
                <div class="card-header bg-primary text-white py-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h1 class="h2 mb-1">{{$book['title']}}</h1>
                            <p class="lead mb-0 opacity-75">{{$book['author']}}</p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="book-create.html" class="btn btn-light">Editar</a>
                            <button class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </div>

                <!-- Grade de Detalhes -->
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- Coluna Esquerda - Capa -->
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="https://placehold.co/300x450/6c757d/ffffff?text=Capa+do+Livro"
                                     alt="Capa do Livro" class="img-fluid rounded shadow-sm mb-3"
                                     style="max-height: 400px;">
                            </div>
                        </div>

                        <!-- Coluna Direita - Informações -->
                        <div class="col-md-8">
                            <h2 class="h5 mb-3">Informações do Livro</h2>

                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td class="text-muted fw-medium w-40 pe-3">Gênero:</td>
                                    <td><span class="badge bg-primary bg-opacity-10 text-primary">{{$book['genre']}}</span></td>
                                </tr>
                                <tr>
                                    <td class="text-muted fw-medium pe-3">Publicado:</td>
                                    <td>{{$book['published_year']}}</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Descrição -->
                        <div class="col-12">
                            <h2 class="h5 mb-3">Sobre Este Livro</h2>
                            <p class="mb-3">
                                {{$book['description']}}
                            </p>
                        </div>
                    </div>

                    <!-- Botões de Ação -->
                    <div class="mt-4 pt-3 border-top d-flex gap-3">
                        <a href="{{route('books.index')}}" class="btn btn-primary px-4">Voltar para a Lista</a>
                        <a href="book-create.html" class="btn btn-success px-4">Editar Livro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
