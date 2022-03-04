<h1>Alterar aluno {{$aluno->nome}}</h1>
@if ($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
<form action="{{route('aluno.update',$aluno->id)}}"method="post">
    @method("put")
    @csrf
    <input type="text" name="nome" id=nome value="{{$aluno->nome}}">
    <input type="text" name="email" id=email value="{{$aluno->email}}">
    <button type="submit">Atualizar aluno</button>
</form>