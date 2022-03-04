<h1>Alterar classe {{$classe->nome}}</h1>
@if ($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
<form action="{{route('classe.update',$classe->id)}}"method="post">
    @method("put")
    @csrf
    <input type="text" name="nome" id=nome value="{{$classe->nome}}">
    <input type="text" name="descricao" id=descricao value="{{$classe->descricao}}">
    <button type="submit">Atualizar classe</button>
</form>