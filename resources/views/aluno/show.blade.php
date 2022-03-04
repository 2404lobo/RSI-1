<h1>Detalhes do Aluno</h1>
<p>Nome: {{ $aluno->nome }}</p>
<p>Email    : {{ $aluno->email }}</p>

<a href="{{route('aluno.index')}}"><button>Voltar</button></a>