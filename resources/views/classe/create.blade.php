<h1>Cadastrar nova classe</h1>
@if ($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
<form action="{{ route('classe.store') }}" method="post">
    @csrf
    <input type="text" name="nome" id=nome value="{{old('nome')}}">
    <input type="text" name="descricao" id="descricao" value="{{old('descricao')}}">
    <button type="submit">Cadastrar classe</button>
</form>