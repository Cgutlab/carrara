@extends('adm.main')

@section('titulo', 'Editar destacado')

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
				{!!Form::model($destacado, ['route'=>['home.destacado.update', $destacado->id], 'method'=>'PUT', 'files' => true])!!}
						<div class="file-field input-field col s6">
					    	{!!Form::label('title','Título')!!}
							{!!Form::text('title',$destacado->title_es,['class'=>'validate', 'disabled'])!!}
						</div>
						<div class="input-field col s6">
				    		{!!Form::Select('important',[null => 'Destacado...', 'si' => 'si', 'no' =>'no'])!!}
						</div>
						<div class="col s12 no-padding">
							{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
						</div>
			{!!Form::close()!!}
			</div> 
		</div>
	</main>
@endsection