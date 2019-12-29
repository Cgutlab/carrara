@extends('adm.main')

@section('titulo', 'Crear cliente')

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
			{!!Form::open(['route'=>'clientes.store', 'method'=>'POST'])!!}
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
						{!!Form::label('telefono', 'Telefono')!!}
						{!!Form::text('telefono',null,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('correo', 'Correo')!!}
						{!!Form::email('correo',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('direccion' ,'Dirección')!!}
						{!!Form::text('direccion',null,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('orden', 'Orden')!!}
						{!!Form::text('orden',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						<select name="active" id="active">
							<option value="0">-- Activo --</option>
							<option value="1">Si</option>
							<option value="0">No</option>
						</select>
					</div>
				</div>
				{!!Form::submit('crear', ['class'=>'waves-effect waves-light btn right btn-submit'])!!}
			{!!Form::close()!!}
			</div>
		</div>


@endsection