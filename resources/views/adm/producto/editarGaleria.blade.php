@extends('adm.main')

@section('titulo', 'Editar imagen')

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
			{!!Form::model($galeria, ['route'=>['productogaleria.update', $galeria->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('order', 'Orden')!!}
						{!!Form::text('order', $galeria->order,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="file-field input-field col s16">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('image') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
						<small>Tamaño recomendado 508x337</small>
					</div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>
@endsection