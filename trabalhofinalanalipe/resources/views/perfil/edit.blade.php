<form action="{{ route('perfil.update', $perfil->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('get')

    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" class="form-control" value="{{ $perfil->titulo }}">
    </div>

    <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea name="conteudo" class="form-control">{{ $perfil->conteudo }}</textarea>
    </div>

    <div class="form-group">
        <label for="images">Escolher Imagem</label>
        <input type="file" name="images[]" class="form-control" multiple>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>