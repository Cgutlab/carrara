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
			                    	<a class="dropdown-trigger gris-claro centrado fs14" href='{{ route('salir') }}'><i class="fas fa-user-circle fs22" style="letter-spacing: 1px; margin-right: 5px;"></i> Cerrar sesión</a>
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
					<nav class="header z-depth-0 centrar" style="width: initial;">
					    <div class="nav-wrapper">
					      	<ul id="nav-mobile" class="hide-on-med-and-down">
					      		<li><a class="centrado gris @if($active == 'descarga') activo @endif" href="{{ route('descarga') }}">Descargas</a></li>
			                </ul>
			            </div>
				    </nav>
				</div>
			</div>
		</div>
</header>
	<ul id="slide-out" class="side-nav">
		<li><a class="centrado" href="{{ route('descarga') }}">Descargas</a></li>
  	</ul>



