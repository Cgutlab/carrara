<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Familias</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
</head>
<body>
	@include('page.template.header')
<main class="familia">
	<div class="banner valign-wrapper">
		<div class="container width85">
			<div class="titulo semibold italic fs35">Productos</div>
		</div>
	</div>
	<div class="container mt50 mb50">
		<div class="row">
			@foreach($familias as $familia)
				<div class="col s12 m6 l4">
					<a class="gris-oscuro center-align" href="{{ route('productos', $familia->id) }}">
						<div class="card z-depth-0">
							<div class="card-image" style="overflow: hidden;">
								<div class="efecto" style="background: url('{{ asset('images/hover.png') }}');background-repeat: no-repeat;background-position: bottom;background-size: contain;background-blend-mode: multiply;">
				                    <span class="central"><i class="material-icons">add</i></span>
									<span class="blanco titulo-hover">{!! $familia->title !!}</span>
				                </div>
								<img class="responsive-img" src="{{ asset('images/familias/'.$familia->image) }}" alt="">
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</main>


	@include('page.template.footer')

	@include('page.template.scripts')

</body>
</html>