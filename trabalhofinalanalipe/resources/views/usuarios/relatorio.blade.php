

<h1>{{ $title }}</h1>

<br/>
<br/>

@foreach( $users as $user)


<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
		{{$user->nome}}
		</h3>
	</div>
	<div class="panel-body">
 		Email:{{$user->email}}
 		<br/>
 		Regra:{{$user->role}}
 	</div>
</div>
<br/>
@endforeach

