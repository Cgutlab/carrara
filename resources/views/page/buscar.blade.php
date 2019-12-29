<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Busqueda</title>
    @include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
</head>
<body>
	@include('page.template.header')
<main class="productos mb70">
	<div class="container">
		<nav class="z-depth-0 mt70 mb50 busqueda">
	    	<div class="nav-wrapper z-depth-0">
	      		{!! Form::open(['route'=>'buscador', 'method' => 'POST']) !!}
                    <div class="input-field">
                        <input id="busqueda" name="busqueda" type="search" placeholder="Buscar" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">chevron_right</i>
                    </div>
	      		{!! Form::close() !!}
	    	</div>
	  	</nav>
      	<div class="row">
            @if($busca==1)
                @forelse ($productos as $producto)
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
                    <div class="gris-claro center-align centrado fs22"><i class="material-icons azul" style="margin-right: 10px;">warning</i>   No se encontraron productos</div>

                @endforelse
            @endif
        </div>
    </div>
</main>
@include('page.template.footer')
@include('page.template.scripts')
</body>
</html>