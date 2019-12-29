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
	<main class="productos">
		<div class="banner valign-wrapper">
			<div class="container width85">
				<div class="titulo semibold italic fs35">Productos</div>
			</div>
		</div>
		<div class="container width85 mt10">
			<div class="fs14 gris"><a class="gris" href="{{ route('familia') }}">Productos </a>| {{ $familia->title }}
		</div>
		<div class="container width85 mt50 mb20">
			<div class="row">
				@forelse($productos as $producto)
					<a href="{{ route('producto',$producto->id) }}" class="gris">
						<div class="col s12 m6 l4 mb30">
							<div class="card z-depth-0">
						        <div class="card-image centrado" style="background: url('{{ asset('images/fondo_productos.png') }}');background-position: bottom; background-repeat: no-repeat; background-size: contain;">
						        	<div class="efecto">
			                        	<span class="central"><i class="material-icons" style="line-height: 0;">add</i></span>
			                    	</div>
						          	<img src="{{ asset('images/productos/'.$producto->image) }}">
						        </div>
						        <div class="card-content centrar">
						          	<div class="fs18 verde">{!! $producto->name !!}</div>
						          	<div class="gris-claro">{{ $producto->width }} x {{ $producto->height }} x {{ $producto->depth }}</div>
						        </div>
					      	</div>
						</div>
					</a>
				@empty
					<div class="center-align">Esta categoría no tiene productos</div>
				@endforelse
			</div>
		</div>
	</main>


	@include('page.template.footer')

	@include('page.template.scripts')

</body>
</html>