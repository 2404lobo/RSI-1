@if (session('message'))
    <p>{{session('message')}}</p>
@endif
<h1>Professores</h1> <a href="{{ route('professor.create') }}">Adicionar Novo</a>
@foreach($professores as $professor)
    <p><b>{{$professor->nome}}</b><p><br>
    <p>{{$professor->email}}<p><br>
    <a href="{{route('professor.show',$professor->id)}}">Ver mais</a><br>
    <a href="{{route('professor.edit',$professor->id)}}">Atualizar</a>
    <form action="{{route('professor.destroy', $professor->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>        
    </form>
    -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
@endforeach
<a href="{{ route('dashboard') }}">Voltar</a>