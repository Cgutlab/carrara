@extends('adm.main')

@section('titulo', 'Editar galerias')

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
						<a href="{{ route('productogaleria.create') }}"><div class="right nuevo"><i class="material-icons">add</i>Nueva imagen</div></a>
						<thead>
							<td>Imagen</td>
							<td>Orden</td>
							<td class="text-right">Acciones</td>
						</thead>
						<tbody>
							@foreach($galerias as $galeria)
								<tr>
									<td><img class="slider-foto" src="{{ asset("images/galeria/".$galeria->image) }}" width="100"></td>
									<td>{!! $galeria->order !!}</td>
									<td class="text-right">
										<a href="{{ route('productogaleria.edit',$galeria->id) }}"><i title="Editar" class="material-icons">create</i></a>
										{!!Form::open(['class'=>'en-linea', 'route'=>['productogaleria.destroy', $galeria->id], 'method' => 'DELETE'])!!}
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