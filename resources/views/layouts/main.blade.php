<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- fonte do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- CSS do bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse navbar-dark bg-dark" id="navbar"> <!-- Adicionado navbar-dark bg-dark aqui -->
                <a href="/" class="navbar-brand">
                    <img src="/img/event-logo.png" alt="hdc events">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li>
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li>
                        <a class="nav-link">Entrar</a>
                    </li>
                    <li>
                        <a class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    @yield('content')
    <footer>HDC Events &copy; 2023</footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
