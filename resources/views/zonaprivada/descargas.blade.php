<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Descargas</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/descarga.css') }}">
</head>
<body>
	@include('page.template.zonaprivadaheader')
	<main class="descarga">
		<div class="banner valign-wrapper">
			<div class="container width85">
				<div class="titulo semibold italic fs35">Descargas</div>
			</div>
		</div>
		<div class="container width85 mb50 mt50">
			<div class="row">
				@forelse($descargas as $descarga)
					<div class="col s12 m4 l3 center-align">
						<div>
							<img class="responsive-img" src="{{ asset('images/catalogo/cover1.jpg') }}" alt="">
						</div>
						<div><a href="{{ asset('images/descarga/'.$descarga->image) }}" class="gris centrado" download=""><i class="material-icons verde" style="margin-right: 10px; margin-left: 20px;">file_download</i>{{ $descarga->name }}</a></div>
					</div>	
				@empty
					<div class="center-align centrado azul"><i class="material-icons" style="margin-right: 10px;">warning</i>No existen descargas</div>	
				@endforelse
			</div>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>