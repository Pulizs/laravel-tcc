<footer id="footer" class="footer">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0" style="color: white;">
                <img src="{!! url('assets/images/logobranca_mathscience-sem_fundo.png') !!}" alt="" width=30%>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="color: white;">
                <h5 class="text">Navegação</h5>
                <ul class="list-unstyled mb-0" style="color: white;">
                    <li><a href="{{ route('livros.index') }}" class="nav-link">Literatura Científica</a></li>
                    <li><a href="{{ route('eventos.index') }}" class="nav-link">Eventos</a></li>
                    <li><a href="{{ route('duvidas.index') }}" class="nav-link">Sobre</a></li>
                    <li><a href="{{ route('postagens.index') }}" class="nav-link">Postagens</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="color: white;">
                <h5 class="text-uppercase mb-0">Contato</h5>
                <ul class="list-unstyled">
                    <li><a href="#!" class="nav-link">suportemathsciencespace@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); color: white;">
        © 2024 Copyright:
        <a class="nav-link" href="">IFPR Campus Curitiba</a>
    </div>
</footer>