@include('includes.header')


<!-- IMPRIMIR POR PANTALLA -->

<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{ date('Y') }}</p>


<!-- COMENTARIO -->

<!-- Esto es un comentario html-->
<?php
// Esto es un comentario php
?>
{{-- Esto es un comentario blade --}}


<!-- MOSTRAR SI EXISTE-->

<!-- <?= isset($director) ? $director : 'No hay director'; ?> -->
{{ $director ?? 'No hay ningun director' }}


<!-- CONDICIONALES -->

@if($titulo && count($listado) >= 5)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 5</h1>
@elseif($titulo)
    <h1>El titulo existe, y el listado no es mayor a 5</h1>
@else
    <h1>La condicion no se ha cumplido</h1>
@endif


<!-- BUCLES -->

@for($i = 1; $i <= 20; $i++)
    El numero es: {{$i}} <br>
@endfor

<hr>

<?php $contador = 1 ?>
@while($contador < 50)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}} <br>
    @endif
    <?php $contador++; ?>
@endwhile

<hr>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach



@include('includes.footer')