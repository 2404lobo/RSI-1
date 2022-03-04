@if (session('message'))
    <p>{{session('message')}}</p>
@endif
<h1>Alunos</h1> <a href="{{ route('aluno.create') }}">Adicionar Novo</a>
@foreach($alunos as $aluno)
    <p><b>{{$aluno->nome}}</b><p><br>
    <p>{{$aluno->email}}<p><br>
    <a href="{{route('aluno.show',$aluno->id)}}">Ver mais</a><br>
    <a href="{{route('aluno.edit',$aluno->id)}}">Atualizar</a>
    <form action="{{route('aluno.destroy', $aluno->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>        
    </form>
    -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
@endforeach
<a href="{{ route('dashboard') }}">Voltar</a>