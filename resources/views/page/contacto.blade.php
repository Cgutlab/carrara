<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Contacto</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">

</head>
<body>
	@include('page.template.header')
	<main class="contacto">
		<div class="banner valign-wrapper">
			<div class="container width85">
				<div class="titulo semibold italic fs35">Contacto</div>
			</div>
		</div>
		<iframe src="{{ $mapa->description }}" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
		<div class="container width85">
				@if(session('error'))
					<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
						{{ session('error') }}
					</div>
				@endif
				@if(session('success'))
					<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
						{{ session('success') }}
					</div>
				@endif 
			<div class="row mt40">
				<div class="col s12 azul center-align fs18 mb10">Complete el formulario a continuación y nuestro equipo se contactará a la brevedad</div>
				<div class="col s12 m4 mt30">
	                <div class="item-footer row gris">
						 <div class="col l12 mb15">
		                    <div class="row">
		                        <a href="" class="gris">
		                            <div class="col s1">    
		                                <i class="azul {{ $ubicacion->icon }}"></i>
		                            </div>
		                            <div class="col s10 gris">
		                                {{ $ubicacion->description }}
		                            </div>
		                        </a>
		                    </div>
		                </div>
		            </div>
	                <div class="item-footer row gris">
	                    <div class="col l12 mb15">
	                        <div class="row">
	                            <a href="tel:{{ $telefono->description }}" class="gris">
	                                <div class="col s1">    
	                                    <i class="azul {{ $telefono->icon }}"></i>
	                                </div>
	                                <div class="col s10 gris">
	                                    {{ $telefono->description }}
	                                </div>
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="item-footer row gris">
	                    <div class="col l12 mb15">
	                        <div class="row">
	                            <a href="mailto:{{ $correo->description }}" class="gris">
	                                <div class="col s1">    
	                                    <i class="azul {{ $correo->icon }}"></i>
	                                </div>
	                                <div class="col s10 gris">
	                                    {{ $correo->description }}
	                                </div>
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            </div>
				<div class="col s12 m8">
					<div class="row">
						{!!Form::open(['route' => 'contacto.enviar', 'method'=>'POST'])!!}
							<div class="input-field col m6 s12">
								{!!Form::text('nombre',null,['class'=>'validate', 'placeholder' => 'Nombre', 'required'])!!}
							</div>
							<div class="input-field col m6 s12">
								{!!Form::text('telefono',null,['class'=>'validate', 'placeholder' => 'Teléfono' ,'required'])!!}
							</div>
							<div class="input-field col m6 s12">
								{!!Form::text('empresa',null,['class'=>'validate', 'placeholder' => 'Empresa'])!!}
							</div>
							<div class="input-field col m6 s12">
								{!!Form::email('email',null,['class'=>'validate', 'placeholder' => 'Correo electrónico' ,'required'])!!}
							</div>
							<div class="input-field col m12 s12">
								{!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea', 'placeholder' => 'Mensaje' ,'required'])!!}
							</div>                  
					</div>
					<div class="row">
						<div class="col s6">
							<div class="g-recaptcha" data-sitekey="6Le4WT4UAAAAAMsSrRvyvdMGIEyHIXLmuf9EFYPl"></div>		
						</div>
						<div class="col s6">
	        				<input type="checkbox" id="terminos" required="">
	        				<label for="terminos"><a href="#modal1" class="modal-trigger gris" style="font-size: 12px;">Acepto los términos y condiciones</a></label>
	      				</div>
					</div>
				</div>
				<div class="col m12 center-align">
					<button class="btn waves-effect waves-dark z-depth-0 mb50 mt20 boton azul semibold" type="submit" name="action" style="border:1px solid #004680;">Enviar</button>
				</div>
				{!!Form::close()!!}
			</div>
		</div>
	</main>
	<div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>{!! $termino->title !!}</h4>
	      <p>{!! $termino->text !!}</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect btn-flat">Cerrar</a>
	    </div>
  	</div>

	@include('page.template.footer')

	@include('page.template.scripts')
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script>
		$(document).ready(function(){
    		$('.modal').modal();
  		});
	</script>
</body>
</html>