<header>
    <nav class="navbar" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{!! url('assets/images/logo_mathscience-sem_fundo.png') !!}" width="50px" alt="">
                Math-Science Space
            </a>
            <div class="d-flex align-items-center">
                <button class="btn theme-toggle" id="theme-toggle" title="Alternar tema">🌙</button>
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
                <div class="offcanvas-body" id="offcanvasBody">
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
                                <a class="nav-link dropdown-toggle" href="{{ route('livros.index') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Tela Admin</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('eventos.index') }}">Publicar Eventos</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('livros.index') }}">Publicar Livros</a></li>
                                    <li><a class="dropdown-item" href="">Publicar Artigos Científicos</a></li>
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

    .navbar {
        background-color: #D0E9E9 !important;
        /* Cor fixa */
    }



    footer.light-mode {
        background-color: #D0AAD1;
    }

    /* Modo escuro */
    body.dark-mode {
        background-color: #121212;
        color: #ffffff;
    }

    .offcanvas.light-mode {
        background-color: #D0AAD1;
        color: #000000;
    }

    .offcanvas-body.light-mode {
        background-color: #D0AAD1;
        /* Cor para o body do menu em modo claro */
        color: #000000;
    }

    .offcanvas.dark-mode {
        background-color: #5A8F99 !important;
        /* Fundo escuro do menu */
        color: #ffffff !important;
    }

    .offcanvas-body.dark-mode {
        background-color: #5A8F99;
        /* Cor para o body do menu em modo escuro */
        color: #ffffff;
    }


    footer.dark-mode {
        background-color: #2F2F2F;
        /* Cinza escuro */
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
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        const footer = document.querySelector('#footer'); // Selecionando o footer corretamente
        const offcanvas = document.getElementById('offcanvasNavbar'); // Selecionando o menu offcanvas
        const offcanvasBody = document.getElementById('offcanvasBody'); // Selecionando o offcanvas-body

        // Define o tema padrão como 'light-mode' no primeiro acesso
        let savedTheme = localStorage.getItem('theme');
        if (!savedTheme) {
            savedTheme = 'light-mode'; // Define o modo claro como padrão
            localStorage.setItem('theme', savedTheme); // Salva no localStorage
        }

        // Aplica o tema salvo
        body.classList.add(savedTheme);
        footer?.classList.add(savedTheme);
        offcanvas?.classList.add(savedTheme);
        offcanvasBody?.classList.add(savedTheme);

        // Atualizar o botão de alternância
        if (themeToggle) {
            themeToggle.textContent = savedTheme === 'dark-mode' ? '☀️' : '🌙';
        }

        // Alternar tema ao clicar no botão
        themeToggle?.addEventListener('click', () => {
            const isDarkMode = body.classList.toggle('dark-mode');
            body.classList.toggle('light-mode', !isDarkMode);
            footer?.classList.toggle('dark-mode', isDarkMode);
            footer?.classList.toggle('light-mode', !isDarkMode);
            offcanvas?.classList.toggle('dark-mode', isDarkMode);
            offcanvas?.classList.toggle('light-mode', !isDarkMode);
            offcanvasBody?.classList.toggle('dark-mode', isDarkMode);
            offcanvasBody?.classList.toggle('light-mode', !isDarkMode);

            // Atualizar o texto do botão
            themeToggle.textContent = isDarkMode ? '☀️' : '🌙';

            // Salvar o estado no localStorage
            localStorage.setItem('theme', isDarkMode ? 'dark-mode' : 'light-mode');
        });
    });
</script>
