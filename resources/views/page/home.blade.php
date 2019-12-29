<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Home</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="home">
		<div class="slider">
		    <ul class="slides">
		        @foreach($sliders as $slider)
		            <li>
		                <img src="{{ asset('images/sliders/'.$slider->image) }}">
		                <div class="caption">
		                    <div class="fs68 azul italic semibold no-margin" style="line-height: 1; width: 60%;">{!! $slider->title !!}</div>
		                    <div class="fs28 gris-oscuro mt10">{!! $slider->subtitle !!}</div>
		                </div>
		            </li>
		        @endforeach
		    </ul>
		</div>
		<div class="container mt50 mb50">
			<div class="row">
				@foreach($destacados as $destacado)
					<div class="col s12 m6 l4">
						<a class="gris-oscuro center-align" href="{{ route('productos', $destacado->id) }}">
							<div class="card z-depth-0">
								<div class="card-image" style="overflow: hidden;">
									<div class="efecto" style="background: url('{{ asset('images/hover.png') }}');background-repeat: no-repeat;background-position: bottom;background-size: contain;background-blend-mode: multiply;">
					                    <span class="central"><i class="material-icons">add</i></span>
										<span class="blanco titulo-hover">{!! $destacado->title !!}</span>
					                </div>
									<img class="responsive-img" src="{{ asset('images/familias/'.$destacado->image) }}" alt="">
								</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
		<div class="bg-gris-claro padding-2rem">
			<div class="container width85 mt20">
				<div class="row">
					<div class="col s12 m6">
						<div class="fs30 azul semibold italic mb20">{{ $texto->title }}</div>
						<div>{!! $texto->text !!}</div>
						<a href="{{ route('familia') }}" class="azul"><button class="btn azul boton z-depth-0 waves waves-effect waves-dark mt30 mb30" style="border:1px solid #004680;">DESCUBRILO</button></a>
					</div>
					<div class="col s12 m6">
						<img class="responsive-img" src="{{ asset('images/texto/'.$texto->image) }}" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="padding-5rem" style="background: url('{{ asset('images/texto/'.$texto2->image) }}'); background-size: cover; background-repeat: no-repeat;">
			<div class="container blanco">
				<div class="row">
					<div class="col s12 m3 semibold fs38 mb20" style="line-height: 1.2; border-left: 6px solid #009688;">{{ $texto2->title }}</div>
					<div class="col offset-m1 lighter fs18 s12 m8">
						{!! $texto2->text !!}
						<a href="{{ route('presupuesto') }}" class="blanco"><button class="btn boton z-depth-0 waves waves-effect waves-light mt10">INGRESAR</button></a>
					</div>
				</div>
			</div>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>