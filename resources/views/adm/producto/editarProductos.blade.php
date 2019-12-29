@extends('adm.main')

@section('titulo', 'Editar productos')

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
					<legend style="margin-bottom: 30px; font-weight: bold; color:#494949;">{!! $familia->title !!}</legend>
					<thead>
						<td class="capitalize">Nombre</td>
						<td>Orden</td>
						<td>Galería</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($productos as $producto)
							<tr>
								<td>{!! $producto->name !!}</td>
								<td>{!! $producto->order !!}</td>
								<td><a href="{{ route('productogaleria.show',$producto->id) }}"><i title="Galería" class="material-icons">photo_library</i></a></td>
								<td class="text-right flex-action">
									<a href="{{ route('producto.edit', $producto->id) }}"><i title="Editar" class="material-icons">create</i></a>
									{!!Form::open(['class'=>'en-linea', 'route'=>['producto.destroy', $producto->id], 'method' => 'DELETE'])!!}
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