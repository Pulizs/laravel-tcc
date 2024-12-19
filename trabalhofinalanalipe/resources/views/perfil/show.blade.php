<div class="container">
    <div class="row">
        <div class="col">
        @if(auth()->user()->profile_photo)
    <img src="{{ asset('storage/' . auth()->user()->images) }}" alt="Foto de Perfil" width="150">
@else
    <p>Sem foto de perfil</p>
@endif
        </div>

        <div class="col">
            <h4>{{ $user->nome }}</h4>
            <p>{{ $user->nickname }}</p>
            <p>{{ $user->nickname }}</p>
        </div>
    </div>
</div>
