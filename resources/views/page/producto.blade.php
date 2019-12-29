<!DOCTYPE html>
<html lang="es">
<head>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Productos ~ Productos</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="producto">
		<div class="banner valign-wrapper">
			<div class="container width85">
				<div class="titulo semibold italic fs35">Producto</div>
			</div>
		</div>
		<div class="container width85 mt10">
			<div class="fs14 gris"><a class="gris" href="{{ route('familia') }}">Productos </a>| <a class="gris" href="{{ route('productos', $producto->familia->id) }}"> {{ $producto->familia->title }} </a> | {{ $producto->name }} </div>
		</div>
		<div class="container width85 mb30">
			<div class="row mt50">
				<div class="col s12 m5">
					@if($producto->image != 'no-image.jpg')
						<div class="slider single-item">
							<div>
								<img class="responsive-img" src="{{ asset('images/productos/'.$producto->image) }}" alt="">
							</div>
							@foreach($galerias as $galeria)
								<div>
									<img class="responsive-img" src="{{ asset('images/galeria/'.$galeria->image) }}" alt="">	
								</div>
							@endforeach
						</div>
					@endif
				</div>
				<div class="col s12 m7">
					<div class="azul italic fs33 semibold">{{ $producto->name }}</div>
					<div class="mb20">{!! $producto->descripcion !!}</div>
					<a href="{{ route('presupuesto') }}" class="azul"><button class="btn azul boton z-depth-0 waves waves-effect waves-dark mt30 mb30" style="border:1px solid #004680; width: 220px!important; line-height: 1;">SOLICITAR PRESUPUESTO</button></a>
					<table class="bg-gris-claro">
						@if($producto->width)
							<tr>
								<td class="verde">Ancho</td>
								<td>{{ $producto->width }}</td>
							</tr>
						@endif
						@if($producto->height)
							<tr>
								<td class="verde">Largo</td>
								<td>{{ $producto->height }}</td>
							</tr>
						@endif
						@if($producto->depth)
							<tr>
								<td class="verde">Profundidad</td>
								<td>{{ $producto->depth }}</td>
							</tr>
						@endif
						@if($producto->capacity)
							<tr>
								<td class="verde">Capacidad</td>
								<td>{{ $producto->capacity }}</td>
							</tr>
						@endif
						@if($producto->bomb)
							<tr>
								<td class="verde">Bomba</td>
								<td>{{ $producto->bomb }}</td>
							</tr>
						@endif
						@if($producto->jet)
							<tr>
								<td class="verde">Jets</td>
								<td>{{ $producto->jet }}</td>
							</tr>
						@endif
						@if($producto->regulator)
							<tr>
								<td class="verde">Regulador de Aire</td>
								<td>{{ $producto->regulator }}</td>
							</tr>
						@endif
						@if($producto->soup)
							<tr>
								<td class="verde">Dist. sopapa</td>
								<td>{{ $producto->soup }}</td>
							</tr>
						@endif
						@if($producto->switch)
							<tr>
								<td class="verde">Air Switch</td>
								<td>{{ $producto->switch }}</td>
							</tr>
						@endif
					</table>
				</div>
			</div>
			@if($producto->draw)
				<div class="row mb30">
					<div class="azul italic fs25 mt30">Dibujos técnicos</div>	
					<div class="linea mb30"></div>
					<div class="center-align">
						<img src="{{ asset('images/productos/'.$producto->draw) }}" alt="">
					</div>
				</div>
			@endif
		</div>
		<div class="bg-gris-claro">
			<div class="container width85">
				<div class="row">
					<div class="azul col s12 italic fs25 mt30 mb10" style="padding-top: 1rem;">Productos Relacionados</div>
					@foreach($producto->productos as $relacionado)
		                <a href="{{ route('producto',$relacionado->id) }}" class="gris">
							<div class="col s12 m6 l4 mb30">
								<div class="card z-depth-0">
							        <div class="card-image centrado" style="background: url('{{ asset('images/fondo_productos.png') }}');background-position: bottom; background-repeat: no-repeat; background-size: contain;">
							        	<div class="efecto">
				                        	<span class="central"><i class="material-icons" style="line-height: 0;">add</i></span>
				                    	</div>
							          	<img src="{{ asset('images/productos/'.$relacionado->image) }}" style="max-height: 90%; width: auto;">
							        </div>
							        <div class="card-content centrar bg-gris-claro">
							          	<div class="fs18 verde">{!! $relacionado->name !!}</div>
							          	<div class="gris-claro">{{ $relacionado->width }} x {{ $relacionado->height }} x {{ $relacionado->depth }}</div>
							        </div>
						      	</div>
							</div>
						</a>
		            @endforeach 
				</div>
			</div>
		</div>
	</main>


	@include('page.template.footer')

	@include('page.template.scripts')
	<script>
		$('.single-item').slick({
			dots:true,
			arrows:false

		});

	</script>
</body>
</html>