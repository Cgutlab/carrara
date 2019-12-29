<header>
		<div class="hide-on-med-and-down" style="height: 40px;">
			<div class="container width85">	
				<div class="col s12 l11" style="height: 142px;">
					<div class="row">
						<div class="col s6">
						</div>
						<div class="col s6 right">
							<div class="right">
								<div class="row centrado" style="height: 40px;">
			                    	@foreach($hredes as $hred)
			                    		<a href="{{ $hred->route }}" target="__blank" class="centrado"><i class="fs22 azul {{ $hred->icon }}" style="margin-right: 15px;"></i></a>
			                    	@endforeach
			                    	<a class="dropdown-trigger gris-claro centrado fs14" href='#' data-target="dropdown1"><i class="fas fa-user-circle fs22" style="letter-spacing: 1px; margin-right: 5px;"></i> Zona privada</a></div>
				      			</div>
			      			</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container width85">
			<div class="row">
				<div class="col s6 l3">
					<div class="z-depth-0 row" style="padding: 0 0 10px;">
			      		<a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('images/logos/'. $logoh->image) }}"></a>
					</div>
				</div>
				<a href="#" data-activates="slide-out" class="button-collapse right azul hide-on-large-only" style="margin-top: 3rem; height: 24px;"><i class="material-icons">menu</i></a>
				<div class="col s9 hide-on-med-and-down">
					<nav class="header z-depth-0 centrar">
					    <div class="nav-wrapper">
					      	<ul id="nav-mobile" class="hide-on-med-and-down">
					      		<li><a class="centrado gris @if($active == 'empresa') activo @endif" href="{{ route('empresa') }}">Empresa</a></li>
					      		<li><a class="centrado gris @if($active == 'producto') activo @endif" href="{{ route('familia') }}">Productos</a></li>
					      		<li><a class="centrado gris @if($active == 'buscador') activo @endif" href="{{ route('buscado') }}">Buscador</a></li>
					      		<li><a class="centrado gris @if($active == 'catalogo') activo @endif" href="{{ route('catalogo') }}">Catálogos</a></li>
					      		<li><a class="centrado gris @if($active == 'presupuesto') activo @endif" href="{{ route('presupuesto') }}">Solicitar Presupuesto</a></li>
					      		<li><a class="centrado gris @if($active == 'contacto') activo @endif" href="{{ route('contacto') }}">Contacto</a></li>
					      		<li><a class="centrado gris no-hover" href="{{ route('buscar') }}"><i class="verde material-icons">search</i></a></li>
			                </ul>
			            </div>
				    </nav>
				</div>
			</div>
		</div>
</header>
	<ul id="slide-out" class="side-nav">
		<li><a class="centrado" href="{{ route('home') }}">Home</a></li>
		<li><a class="centrado" href="{{ route('empresa') }}">Empresa</a></li>
		<li><a class="centrado" href="{{ route('familia') }}">Productos</a></li>
  		<li><a class="centrado" href="{{ route('buscado') }}">Buscador</a></li>
  		<li><a class="centrado" href="{{ route('catalogo') }}">Catálogos</a></li>
  		<li><a class="centrado" href="{{ route('presupuesto') }}">Solicitar Presupuesto</a></li>
  		<li><a class="centrado" href="{{ route('contacto') }}">Contacto</a></li>
  	</ul>

	<ul id="dropdown1" class="z-depth-2" style="width: 250px; position: absolute; right: 1%;z-index: 999; top: 5%; background-color: #FFF; display: none;">        
    <div class="container" style="width: 90%;">
        {!!Form::open(['route'=>'cliente.store', 'method'=>'POST'])!!}
            <div class="input-field col s12 no-margin">
                {!!Form::text('usuario',null,['class'=>'', 'required', 'autocomplete' => 'off'])!!}
                <label for="usuario" class="bold fs15 gris-oscuro">
                    Usuario
                </label>
            </div>
            <div class="input-field col s12 no-margin">
                {!!Form::password('clave',null,['class'=>'', 'required'])!!}
                <label for="clave" class="bold fs15 gris-oscuro">
                    Contraseña
                </label>
            </div>
            <div class="col s12 center mb10">
                <input class="waves-effect waves-dark btn bg-azul boton azul z-depth-0" type="submit" value="INGRESAR" style="border: 1px solid #0B72D8;"></input>
            </div>
            <div class="col s12 fs14 bold center">
                <a href="{{ route('registro') }}" class="azul">CREAR UNA CUENTA NUEVA</a>
            </div>
         {!!Form::close()!!}
    </div>
</ul>


