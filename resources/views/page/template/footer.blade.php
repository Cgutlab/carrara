 <footer>
    <div class="container">
        <div class="row">
            <div class="col s12 l4 mt20">
                <div class="col s5">
                    <ul class="sitemap" style="margin-bottom: 0;">
                        <li><a class="gris" href="{{ route('home') }}">Inicio</a></li>
                        <li><a class="gris" href="{{ route('empresa') }}">Empresa</a></li>
                        <li><a class="gris" href="{{ route('familia') }}">Productos</a></li>
                        <li><a class="gris" href="{{ route('buscado') }}">Buscador</a></li>
                    </ul>
                </div>
                <div class="col s7">
                    <ul class="sitemap">
                        <li><a class="gris" href="{{ route('catalogo') }}">Catálogos</a></li>
                        <li><a class="gris" href="{{ route('presupuesto') }}">Solicitar Presupuesto</a></li>
                        <li><a class="gris" href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </div> 
            </div>
            <div class="col s12 l4 center-align mb20">
                <img src="{{ asset('images/logos/'. $logof->image) }}" alt="">
                <div class="row">
                    <div class="col s12 mb20 mt20">
                        @foreach($fredes as $fred)
                            <a href="{{ $fred->route }}" target="__blank"><i class="fs26 azul lighter {{ $fred->icon }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        	<div class="col s12 l4">
                <div class="row gris">
                    <div class="col l12 mb10">
                        <div class="row">
                            <div class="col s12 azul semibold">
                                CONTACTO
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gris">
                    <div class="col l12 mb15">
                        <div class="row">
                            <a href="" class="blanco">
                                <div class="col s1">    
                                    <i class="azul {{ $ubicacion->icon }}"></i>
                                </div>
                                <div class="col s10 lighter gris">
                                    {{ $ubicacion->description }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gris">
                    <div class="col l12 mb15">
                        <div class="row">
                            <a href="tel:{{ $telefono->description }}" class="gris">
                                <div class="col s1">    
                                    <i class="azul {{ $telefono->icon }}"></i>
                                </div>
                                <div class="col s10 lighter gris">
                                    {{ $telefono->description }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gris">
                    <div class="col l9 mb15">
                        <div class="row">
                            <a href="mailto:{{ $correo->description }}" class="gris">
                                <div class="col s1">    
                                    <i class="azul {{ $correo->icon }}"></i>
                                </div>
                                <div class="col s10 lighter azul">
                                    {{ $correo->description }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="linea" style="height: 1px;"></div>
        <div class="right mt10 mb10 gris-claro" style="font-size: 10px">BY OSOLE</div>
    </div>
</footer>