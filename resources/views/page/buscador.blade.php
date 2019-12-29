<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Buscador</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/buscador.css') }}">
</head>
<body>
	@include('page.template.header')
<main class="buscadores">
	<div class="banner valign-wrapper">
		<div class="container width85">
			<div class="titulo semibold italic fs35">Buscador</div>
		</div>
	</div>
	<div style="background: url('{{ asset('images/buscador.jpg')  }}'); background-repeat: no-repeat; background-size: cover;">
		<div class="container width85" style="padding-top: 188px; padding-bottom: 188px;">
			<div class="filtro">
				<div class="row centrado">
					<div class="col s12 m3 blanco">
						<div class="italic" style="line-height: 1.3; width: 68%;">
							Tenemos el producto ideal para su ambiente
						</div>
						<div class="lighter fs14">
							Buscador por medidas 
						</div>
					</div>
					<div class="col s12 m7">
						{!!Form::open(['route' => 'filtro', 'method'=>'POST'])!!}
						<div class="col s12 m4 input-field">
				    		{{ Form::select('alto', ['' => 'Largo'] + $alto, null, ['class' => 'form-control']) }}
						</div>
						<div class="col s12 m4 input-field">
				    		{{ Form::select('ancho', ['' => 'Ancho'] + $ancho, null, ['class' => 'form-control']) }}
						</div>
						
					</div>
					<div class="col s12 m2">
						<button type="submit" class="btn boton waves waves-effect waves-light z-depth-0 right">Buscar</button>
					</div>
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		@if($busca == 1)
			<div class="row mt30 mb30">
				@forelse($consultas as $consulta)
					<a href="{{ route('producto',$consulta->id) }}" class="gris-oscuro">
					    <div class="col s12 m6 l4 mb30">
							<div class="card z-depth-0">
						        <div class="card-image centrado" style="background: url('{{ asset('images/fondo_productos.png') }}');background-position: bottom; background-repeat: no-repeat; background-size: contain;">
						        	<div class="efecto">
			                        	<span class="central"><i class="material-icons" style="line-height: 0;">add</i></span>
			                    	</div>
						          	<img src="{{ asset('images/productos/'.$consulta->image) }}">
						        </div>
						        <div class="card-content centrar">
						          	<div class="fs18 verde">{!! $consulta->name !!}</div>
						          	<div class="gris-claro">{{ $consulta->width }} x {{ $consulta->height }} x {{ $consulta->depth }}</div>
						        </div>
					      	</div>
						</div>
				    </a>
				 @empty
                    <div class="gris-claro center-align centrado fs22"><i class="material-icons verde" style="margin-right: 10px;">warning</i>   No se encontraron productos</div>
                @endforelse
			</div>
		@endif
		@if($busca == 2)
			<div class="row mt30 mb30">
				@forelse($consultas as $consulta)
					<a href="{{ route('producto',$consulta->id) }}" class="gris-oscuro">
					    <div class="col s12 m6 l4 mb30">
							<div class="card z-depth-0">
						        <div class="card-image centrado" style="background: url('{{ asset('images/fondo_productos.png') }}');background-position: bottom; background-repeat: no-repeat; background-size: contain;">
						        	<div class="efecto">
			                        	<span class="central"><i class="material-icons" style="line-height: 0;">add</i></span>
			                    	</div>
						          	<img src="{{ asset('images/productos/'.$consulta->image) }}">
						        </div>
						        <div class="card-content centrar">
						          	<div class="fs18 verde">{!! $consulta->name !!}</div>
						          	<div class="gris-claro">{{ $consulta->width }} x {{ $consulta->height }} x {{ $consulta->depth }}</div>
						        </div>
					      	</div>
						</div>
				    </a>
				 @empty
                    <div class="gris-claro center-align centrado fs22"><i class="material-icons verde" style="margin-right: 10px;">warning</i>   No se encontraron productos</div>

                @endforelse
			</div>
		@endif
		@if($busca == 3)
			<div class="row mt30 mb30">
				@forelse($consultas as $consulta)
					<a href="{{ route('producto',$consulta->id) }}" class="gris-oscuro">
					    <div class="col s12 m6 l4 mb30">
							<div class="card z-depth-0">
						        <div class="card-image centrado" style="background: url('{{ asset('images/fondo_productos.png') }}');background-position: bottom; background-repeat: no-repeat; background-size: contain;">
						        	<div class="efecto">
			                        	<span class="central"><i class="material-icons" style="line-height: 0;">add</i></span>
			                    	</div>
						          	<img src="{{ asset('images/productos/'.$consulta->image) }}">
						        </div>
						        <div class="card-content centrar">
						          	<div class="fs18 verde">{!! $consulta->name !!}</div>
						          	<div class="gris-claro">{{ $consulta->width }} x {{ $consulta->height }} x {{ $consulta->depth }}</div>
						        </div>
					      	</div>
						</div>
				    </a>
				 @empty
                    <div class="gris-claro center-align centrado fs22"><i class="material-icons verde" style="margin-right: 10px;">warning</i>   No se encontraron productos</div>

                @endforelse
			</div>
		@endif
	</div>
</main>


	@include('page.template.footer')

	@include('page.template.scripts')

</body>
</html>