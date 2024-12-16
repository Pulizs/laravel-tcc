<div class="container">
    <div class="row">
        <div class="col">
            @if($perfil->profile_picture)
                @php
                    $profilePictures = json_decode($perfil->profile_picture, true); // Decodificando o JSON
                @endphp

                @foreach($profilePictures as $image)
                    <img src="{{ asset('storage/' . $image) }}" alt="Foto de Perfil" width="250px"/>
                @endforeach
            @else
                <p>Sem foto de perfil.</p>
            @endif
        </div>

        <div class="col">
            <h4>{{ $user->nome }}</h4>
            <p>{{ $user->nickname }}</p>
        </div>
    </div>
</div>
