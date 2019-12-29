@extends('adm.main')

@section('titulo', 'Editar catálogos')

@section('cuerpo')
<main>
	<div class="container">
	    @if(count($errors) > 0)
			<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
		  		<ul>
		  			@foreach($errors->all() as $error)
		  				<li>{!!$error!!}</li>
		  			@endforeach
		  		</ul>
		  	</div>
		@endif
		@if(session('success'))
			<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
				{{ session('success') }}
			</div>
		@endif

		<div class="row">
			<div class="col s12">
				<table class="highlight bordered">
					<thead>
						<td>Título</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($catalogos as $catalogo)
							<tr>
								<td>{{ $catalogo->title }}</td>
								<td>{{ $catalogo->order }}</td>
								<td class="text-right flex-action">
									<a href="{{ route('catalogos.edit', $catalogo->id) }}"><i title="Editar" class="material-icons">create</i></a>
									{!!Form::open(['class'=>'en-linea', 'route'=>['catalogos.destroy', $catalogo->id], 'method' => 'DELETE'])!!}
										<button type="submit" class="submit-button confirmar">
											<i title="Eliminar" class="material-icons red-text">cancel</i>
										</button>
									{!!Form::close()!!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
    </div>
</main>


@endsection