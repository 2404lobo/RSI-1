<h1>Cadastrar novo aluno</h1>
@if ($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
<form action="{{ route('aluno.store') }}" method="post">
    @csrf
    <input type="text" name="nome" id=nome value="{{old('nome')}}">
    <input type="text" name="email" id="email" value="{{old('email')}}">
    <button type="submit">Cadastrar aluno</button>
</form>