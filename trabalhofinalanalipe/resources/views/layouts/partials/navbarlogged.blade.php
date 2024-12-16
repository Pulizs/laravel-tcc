<header>
    <!-- NAVBAR -->
    <nav class="navbar" id="navbar" style="background-color: #D0E9E9;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{!! url('assets/images/logo_mathscience-sem_fundo.png') !!}" width="50px" alt="">
                Math-Science Space
            </a>
            <div class="d-flex align-items-center">
                <!-- Botão de três riscos -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="background-color: #D0AAD1;">
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
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="{{ route('livros.index') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Materiais</a>
                            <ul class="dropdown-menu" style="background-color: #F2D5E5">
                                <li><a class="dropdown-item" href="{{ route('eventos.index') }}">Eventos</a></li>
                                <li><a class="dropdown-item" href="{{ route('livros.index') }}">Literatura</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('duvidas.index') }}">Dúvidas</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('configuracao.index') }}">Configurações</a>
                        </li> -->
                        @if(auth()->user()->role == "admin")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('telaAdmin.index') }}">Tela Admin</a>
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
