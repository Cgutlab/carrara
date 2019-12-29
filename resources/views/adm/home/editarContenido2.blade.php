@extends('adm.main')

@section('titulo', 'Editar contenido')

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
			{!!Form::model($texto, ['route'=>['hometexto2.update', $texto->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
			      	<label class="col s12" for="titulo">Título</label>
			      	<div class="input-field col s12">
						{!!Form::text('title', $texto->title, ['class'=>'validate'])!!}
				    </div>
			      	<label class="col s12" for="text">Texto</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('text', $texto->text, ['class'=>'validate'])!!}
				    </div>		
					<div class="file-field input-field col s6">
					    <div class="btn">
					        <span>Imagen</span>
					        {!! Form::file('image') !!}
					    </div>
					    <div class="file-path-wrapper">
					      	{!! Form::text('',$texto->image, ['class'=>'file-path validate']) !!}
					    </div>
					</div>
				</div>
				
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
				{!!Form::close()!!} 
				</div>
			</div>
		</div>
	</div>
</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('text');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection