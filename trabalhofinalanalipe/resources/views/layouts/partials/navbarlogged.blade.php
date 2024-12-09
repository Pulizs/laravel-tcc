<header>
    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{!! url('assets/images/logo_mathscience-sem_fundo.png') !!}" width="50px" alt="">
                Math-Science Space
            </a>
            <div class="d-flex align-items-center">
                <!-- Botão de alternância do tema -->
                <button class="btn theme-toggle" id="theme-toggle" title="Alternar tema">🌙</button>
                <!-- Botão de três riscos -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img src="{!! url('assets/images/logo_mathscience-sem_fundo.png') !!}" width="50px" alt="">
                        Math-Science Space
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('postagens.index') }}">Postagens</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('livros.index') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Materiais</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('eventos.index') }}">Eventos</a></li>
                                <li><a class="dropdown-item" href="{{ route('livros.index') }}">Literatura</a></li>
                                <li><a class="dropdown-item" href="">Artigos Científicos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('duvidas.index') }}">Dúvidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('configuracao.index') }}">Configurações</a>
                        </li>
                        @if(auth()->user()->role == "admin")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('livros.index') }}" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Tela Admin <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                    <path
                                        d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2" />
                                    <path
                                        d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu" style="background-color: #F2D5E5">
                                <li><a class="dropdown-item" href="{{ route('eventos.index') }}"> Publicar Eventos <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                            <path
                                                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z" />
                                        </svg></a></li>

                                <li><a class="dropdown-item" href="{{ route('livros.index') }}">Publicar Livros <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                            <path
                                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                        </svg></a></li>
                                <li><a class="dropdown-item" href="">Publicar Artigos Científicos <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                            <path
                                                d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                        </svg></a></li>
                            </ul>
                        </li>
                        @endif
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('perfil.index') }}">{{auth()->user()->nickname}}</a>
                                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light">Logout</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Modo claro (padrão) */
    body.light-mode {
        background-color: #ffffff;
        color: #000000;
    }

    .navbar.light-mode {
        background-color: #D0E9E9;
    }

    .offcanvas.light-mode {
        background-color: #D0AAD1;
    }

    /* Modo escuro */
    body.dark-mode {
        background-color: #121212;
        color: #ffffff;
    }

    .navbar.dark-mode {
        background-color: #333333;
    }

    .offcanvas.dark-mode {
        background-color: #444444;
    }

    /* Estilo do botão de alternância */
    .theme-toggle {
        margin-right: 5px;
        background-color: inherit;
        color: inherit;
        border: 1px solid transparent;
        border-radius: 5px;
        padding: 5px 10px;
    }

    .navbar.light-mode .theme-toggle {
        background-color: #D0E9E9;
        /* Fundo azul claro igual à navbar */
        color: #000;
    }

    .navbar.dark-mode .theme-toggle {
        background-color: #333333;
        /* Fundo escuro igual à navbar */
        color: #fff;
    }
</style>

<script>
    // Script para alternar entre modos
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        const navbar = document.getElementById('navbar');

        // Carregar o tema salvo no localStorage
        const savedTheme = localStorage.getItem('theme') || 'light-mode';
        body.classList.add(savedTheme);
        navbar.classList.add(savedTheme);

        // Atualizar o botão de alternância
        themeToggle.textContent = savedTheme === 'dark-mode' ? '☀️' : '🌙';

        // Alternar tema ao clicar no botão
        themeToggle.addEventListener('click', () => {
            const isDarkMode = body.classList.toggle('dark-mode');
            body.classList.toggle('light-mode', !isDarkMode);
            navbar.classList.toggle('dark-mode', isDarkMode);
            navbar.classList.toggle('light-mode', !isDarkMode);

            // Atualizar texto do botão
            themeToggle.textContent = isDarkMode ? '☀️' : '🌙';

            // Salvar tema no localStorage
            localStorage.setItem('theme', isDarkMode ? 'dark-mode' : 'light-mode');
        });
    });
</script>