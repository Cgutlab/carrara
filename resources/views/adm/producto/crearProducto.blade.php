@extends('adm.main')

@section('titulo', 'Crear producto')

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
				{!!Form::open(['route'=>'producto.store', 'method'=>'POST', 'files' => true])!!}
					<div class="row">
						<div class="input-field col s6">
							{!!Form::label('Nombre')!!}
							{!!Form::text('name',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="input-field col s6">
							<select name="family_id" required="required">
								<option value=""> -- Selecciona una familia --</option>
								@foreach($familias as $familia)
									<option value="{{ $familia->id }}">{{ $familia->title }}</option>
								@endforeach
							</select>
						</div>
						<div class="input-field col s6">
							{!!Form::label('Orden')!!}
							{!!Form::text('order',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="input-field col s6">
							{!!Form::label('keyword', 'Keyword')!!}
							{!!Form::text('keyword',null,['class'=>'validate'])!!}
						</div>
				      	<div class="input-field col s12">
				      		<span class="gris">Descripción</span>
							{!!Form::textarea('descripcion',null, ['class'=>'validate'])!!}
					    </div>		
						<div class="file-field input-field col s6">
					    	<div class="btn">
						        <span>Imagen</span>
						        {!! Form::file('image') !!}
					    	</div>
						    <div class="file-path-wrapper">
						      	{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						    </div>
						</div>
						<div class="file-field input-field col s6">
					    	<div class="btn">
						        <span>Dibujo</span>
						        {!! Form::file('draw') !!}
					    	</div>
						    <div class="file-path-wrapper">
						      	{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						    </div>
						</div>
						<div class="input-field col s12">
							{!!Form::label('width', 'Ancho')!!}
							{!!Form::text('width',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('height', 'Largo')!!}
							{!!Form::text('height',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('depth', 'Profundidad')!!}
							{!!Form::text('depth',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('capacity', 'Capacidad')!!}
							{!!Form::text('capacity',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('bomb', 'Bomba')!!}
							{!!Form::text('bomb',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('jet', 'Jets')!!}
							{!!Form::text('jet',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('regulator', 'Reguladores')!!}
							{!!Form::text('regulator',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('soup', 'Dist. sopapa')!!}
							{!!Form::text('soup', null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col s12">
							{!!Form::label('switch', 'Switch de aire')!!}
							{!!Form::text('switch',null,['class'=>'validate'])!!}
						</div>
						<div class="input-field col l6 s12">
				                {!! Form::label('productos relacionados') !!}<br/>
				                {!! Form::select('productos[]', $productos, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
				        </div>
					</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
				{!!Form::close()!!} 
				</div>
			</div>
		</div>
	</div>
</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('descripcion');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection