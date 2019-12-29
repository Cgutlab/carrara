<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Empresa</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/empresa.css') }}">
</head>
<body>
	@include('page.template.header')
<main class="empresa">
	<div class="slider">
	    <ul class="slides">
	        @foreach($sliders as $slider)
	            <li>
	                <img src="{{ asset('images/sliders/'.$slider->image) }}">
	                <div class="caption">
	                    <div class="fs68 azul italic no-margin" style="line-height: 1;">{!! $slider->title !!}</div>
	                    <div class="fs28 lighter gris-oscuro mt10" style="font-weight: 500;">{!! $slider->subtitle !!}</div>
	                </div>
	            </li>
	        @endforeach
	    </ul>
	</div>
	<div class="container mt50 mb30 width85">
		<div class="row">
			<div class="col s12 l4 center-align mb20">
				<img class="responsive-img mt10" src="{{ asset('images/empresa/'.$empresa->image) }}">
			</div>
			<div class="col s12 l8 mb20">
				<div class="fs33 bold verde italic">{!! $empresa->title !!}</div>
				<div class="linea mb20"></div>
				<div>{!! $empresa->text !!}</div>
			</div>
		</div>
	</div>
</main>


	@include('page.template.footer')

	@include('page.template.scripts')

</body>
</html>