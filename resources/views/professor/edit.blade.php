<h1>Alterar professor {{$professor->nome}}</h1>
@if ($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
<form action="{{route('professor.update',$professor->id)}}"method="post">
    @method("put")
    @csrf
    <input type="text" name="nome" id=nome value="{{$professor->nome}}">
    <input type="text" name="email" id=email value="{{$professor->email}}">
    <button type="submit">Atualizar professor</button>
</form>