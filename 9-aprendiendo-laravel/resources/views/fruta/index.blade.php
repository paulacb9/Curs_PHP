<h1>Listado de frutas</h1>

@if(session('status'))
    <p style="background: green; color:white;">
        {{session('status')}}
    </p>
@endif

<ul>
    @foreach($frutas as $fruta)
    <li>
        <a href="/frutas/detalle/<?=$fruta->id?>">
            {{$fruta->nombre}}
        </a>
    </li>
    @endforeach
</ul>
