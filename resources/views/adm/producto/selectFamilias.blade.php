@extends('adm.main')

@section('titulo', 'Selección de familia')

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
				{!!Form::open(['route'=>'producto.show', 'method'=>'POST', 'files' => true])!!}
					<div class="row">
						<div class="input-field col s6">
							<select name="family_id">
								<option value=""> -- Selecciona una familia --</option>
									@foreach ($familias as $familia)
										<option value="{{ $familia->id }}">{{ $familia->title }}</option>
									@endforeach
							</select>
						</div>
					</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Filtrar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
				{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>

@endsection