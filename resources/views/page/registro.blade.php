<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrara ~ Nuevo cliente</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
</head>
<body>
	@include('page.template.header')
<main class="registro">
	<div class="container mt50 mb50">
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
		<h3 class="azul no-margin">Nuevo usuario</h3>
		<div class="linea mt10 mb30"></div>
		<div class="row">
			{!!Form::open(['route'=>'registro.store', 'method'=>'POST', 'class' => 'col s12'])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('nombre', 'Nombre')!!}
						{!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('apellido', 'Apellido')!!}
						{!!Form::text('apellido',null,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('usuario', 'Usuario')!!}
						{!!Form::text('usuario',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('clave', 'Contraseña')!!}
						{!!Form::password('clave',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('correo', 'Correo')!!}
						{!!Form::email('correo',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('telefono', 'Telefono')!!}
						{!!Form::text('telefono',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('direccion', 'Dirección')!!}
						{!!Form::text('direccion',null,['class'=>'validate'])!!}
					</div>
				</div>
				{!!Form::submit('crear', ['class'=>'waves-effect boton waves-light azul btn right btn-submit mt20 z-depth-0'])!!}
			{!!Form::close()!!}
			</div>
		</div>
</main>


	@include('page.template.footer')

	@include('page.template.scripts')

<script>
  	$(document).ready(function(){
  		$('.slider').slider();
  		$('select').material_select();
  	}); 
</script>
</body>
</html>