<h1>{{$fruta->nombre}}</h1>
<p>
    {{$fruta->descripcion}}
</p>

<a href="/frutas/delete/<?=$fruta->id?>">Eliminar</a>
<a href="/frutas/edit/<?=$fruta->id?>">Actualizar</a>