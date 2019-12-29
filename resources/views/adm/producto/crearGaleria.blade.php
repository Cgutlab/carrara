@extends('adm.main')

@section('titulo', 'Cargar imagen')

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
					{!! Form::open(['route'=>'productogaleria.store', 'method'=>'POST', 'files' => true]) !!}
							<div class="file-field input-field col s6">
								<div class="btn">
								    <span>Imagen</span>
								    {!! Form::file('image') !!}
								</div>
								<div class="file-path-wrapper">
								    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
								</div>
								<small>Tamaño recomendado 508x337</small>
							</div>
							<div class="input-field col s6">
								{!! Form::label('order','Orden') !!}
								{!! Form::text('order',null,['class'=>'validate', 'required']) !!}
							</div>
						<div class="input-field col s6">
							<select name="product_id">
								<option value=""> -- Seleccione un producto --</option>
								@foreach ($productos as $producto)
									<option value="{{ $producto->id }}">{{ $producto->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="col s12 no-padding">
							{!! Form::submit('Crear', ['class'=>'waves-effect waves-light btn right']) !!}
						</div>
					{!! Form::close() !!} 
				</div>
			</div>
		</div>
	</main>
@endsection