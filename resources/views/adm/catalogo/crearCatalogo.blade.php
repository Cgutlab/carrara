@extends('adm.main')

@section('titulo', 'Crear catálogo')

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
				{!!Form::open(['route'=>'catalogos.store', 'method'=>'POST', 'files' => true])!!}
					<div class="row">
						<div class="input-field col s6">
							{!!Form::label('title','Título')!!}
							{!!Form::text('title',null,['class'=>'validate', 'required'])!!}
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
						<div class="input-field col s5">
							{!!Form::label('order','Orden')!!}
							{!!Form::text('order',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="file-field col s6 right centrado">
							<input name="cover" type="radio" id="test1" value="1" />
  							<label for="test1">Portada</label>
  							<img class="imagen" src="{{ asset('images/catalogo/cover1.jpg') }}" alt="">
  							<input name="cover" type="radio" id="test2" value="2" />
  							<label for="test2">Portada</label>
  							<img class="imagen" src="{{ asset('images/catalogo/cover2.jpg') }}" alt="">
  						</div>
  					</div>
					{!!Form::submit('crear', ['class'=>'waves-effect waves-light btn right'])!!}
				{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>


@endsection