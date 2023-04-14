<h1>{{$titulo}}</h1>
<p>(accion index del controlador PeliculaController)</p>

@isset($pagina)
    <h3>La pagina es {{$pagina}}</h3>
@endisset

<a href="{{ url('/detalle') }}">Ir al detalle</a>
<br>
<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>
<br>
<a href="{{ route('detalle.pelicula', ['id' => 12]) }}">Ir al detalle</a>
