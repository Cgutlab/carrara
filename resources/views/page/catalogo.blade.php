<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Catálogo</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/catalogo.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="catalogo">
		<div class="banner valign-wrapper">
			<div class="container width85">
				<div class="titulo semibold italic fs35">Catálogos</div>
			</div>
		</div>
		<div class="container width85 mb50 mt50">
			<div class="row">
				@forelse($catalogos as $catalogo)
					<div class="col s12 m4 l3 center-align">
						<div>
							@if($catalogo->cover == 1)
								<img class="responsive-img" src="{{ asset('images/catalogo/cover1.jpg') }}" alt="">
							@else
								<img class="responsive-img" src="{{ asset('images/catalogo/cover2.jpg') }}" alt="">
							@endif
						</div>
						<div><a href="{{ asset('images/catalogo/'.$catalogo->image) }}" class="gris centrado" download=""><i class="material-icons verde" style="margin-right: 10px; margin-left: 20px;">file_download</i>{{ $catalogo->title }}</a></div>
					</div>			
				@empty
			</div>
				<div class="center-align"><i class="azul material-icons">warning</i>No hay catálogos</div>
			@endforelse
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>