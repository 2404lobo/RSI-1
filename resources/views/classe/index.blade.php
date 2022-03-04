@if (session('message'))
    <p>{{session('message')}}</p>
@endif
<h1>Classes</h1> <a href="{{ route('classe.create') }}">Adicionar Novo</a>
@foreach($classes as $classe)
    <p><b>{{$classe->nome}}</b><p><br>
    <p>{{$classe->descricao}}<p><br>
    <a href="{{route('classe.show',$classe->id)}}">Ver mais</a><br>
    <a href="{{route('classe.edit',$classe->id)}}">Atualizar</a>
    <form action="{{route('classe.destroy', $classe->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>        
    </form>
    -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
@endforeach
<a href="{{ route('dashboard') }}">Voltar</a>