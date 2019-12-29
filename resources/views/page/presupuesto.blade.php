<!DOCTYPE html>
<html lang="es">
<head>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="{{ $metadato->description }}">
	    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Carrara ~ Solicitar presupuesto</title>
	@include('page.template.links')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="{{ asset('css/presupuesto.css') }}">
</head>
<body>
	@include('page.template.header')

<main class="presupuesto">
	<div class="banner valign-wrapper">
		<div class="container width85">
			<div class="titulo semibold italic fs35">Solicitar Presupuesto</div>
		</div>
	</div>
	<div class="container mt70">
		<div class="row">
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
		</div>
		<div class="row">
			<div class="col s6 center-align" id="datos">
				<img src="{{ asset('images/presupuesto/presupuesto1.jpg') }}">
				<div class="vertical"></div>
				<div class="circulo"></div>
				<div class="fs17 mb10 mt10 verde">TUS DATOS</div>
			</div>
			<div class="col s6 lado gris center-align" id="presupuesto">
				<img src="{{ asset('images/presupuesto/presupuesto2.jpg') }}">
				<div class="vertical"></div>
				<div class="circulo"></div>
				<div class="fs17 mb10 mt10 verde">TU CONSULTA</div>
			</div>
		</div>
		{!! Form::open(['route' => 'presupuesto.enviar', 'method' => 'POST', 'files' => true]) !!}
		{{ csrf_field() }}
		<div class="row">
			<div class="col s12">
				<div class="row" id="estado1">
					<div class="col m6 s12 input-field">
						{!! Form::label('nombre','Nombre') !!}
						{!! Form::text('texto', null, ['class' => 'validate']) !!}
					</div>
					<div class="col m6 s12 input-field">
						{!! Form::label('localidad','Localidad') !!}
						{!! Form::text('localidad', null, ['class' => 'validate']) !!}
					</div>
					<div class="col m6 s12 input-field">
						{!! Form::label('email','E-mail') !!}
						{!! Form::email('email', null, ['class' => 'validate']) !!}
					</div>
					<div class="col m6 s12 input-field">
						{!! Form::label('telefono','Teléfono') !!}
						{!! Form::text('telefono', null, ['class' => 'validate']) !!}
					</div>
					<div class="col s12">
						<button type="button" class="waves-effect waves-dark btn boton right azul z-depth-0" id="siguiente" style="border: 1px solid #0059B2;">SIGUIENTE</button>
					</div>
				</div>

				<div class="row" id="estado2" style="display: none;">
					<div class="col m6 s12 input-field">
						{!! Form::label('mensaje','Mensaje') !!}
						{!! Form::textarea('mensaje', null, ['class'=>'validate materialize-textarea']) !!}
					</div>
					<div class="file-field input-field col s12 m6">
						<div class="btn right azul boton z-depth-0 centrado" style="margin-top: 6px; border: 1px solid #0059B2;">
						    <span>EXAMINAR</span>
						    {!! Form::file('archivo') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('',null, ['class'=>'file-path validate', 'placeholder' => 'Archivo']) !!}
						</div>
					</div>
					<div class="col s12">
						<div class="g-recaptcha right" data-sitekey="6Le4WT4UAAAAAMsSrRvyvdMGIEyHIXLmuf9EFYPl"></div>
					</div>
					<div class="col s12 mt20">
						<button type="submit" class="waves-effect waves-dark btn enviar z-depth-0 boton right azul" style="border: 1px solid #0059B2;">ENVIAR</button>
						<button type="button" class="waves-effect waves-dark btn atras z-depth-0 boton" id="atras">ANTERIOR</button>
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</main>


	@include('page.template.footer')

	@include('page.template.scripts')
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script>
        $('#siguiente').click(function(event) {
        	if($('input[name=nombre]').val()!=''||$('input[name=localidad]').val()!=''||$('input[name=telefono]').val()!=''||$('input[name=email]').val()!='')
        	{
        		document.getElementById("estado1").className = "animated bounceOutLeft";
                setTimeout(function(){ 
                    $("#estado1").hide('fast', function() {});
                    $("#estado2").show('fast', function() {});
                    document.getElementById("estado2").className = "animated bounceInRight";
                }, 1000);
                $('#presupuesto').removeClass('gris');
                $('#datos').addClass('gris');
        	}
        });

        $('#atras').click(function(event) {
            document.getElementById("estado2").className = "animated bounceOutRight";
            
            setTimeout(function(){ 
                $("#estado2").hide('fast', function() {}); 
                $("#estado1").show('fast', function() {});
                document.getElementById("estado1").className = "animated bounceInLeft";
            }, 1000);
            
            $('#datos').removeClass('gris');
            $('#presupuesto').addClass('gris');
        });

        function animacion(id, clase) {
            $(id).removeClass("animated "+clase).addClass(clase + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass("animated "+clase);
            });
        };
    </script>
</body>
</html>