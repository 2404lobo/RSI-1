<h1>Detalhes do Professor</h1>
<p>Nome: {{ $professor->nome }}</p>
<p>Email    : {{ $professor->email }}</p>

<a href="{{route('professor.index')}}"><button>Voltar</button></a>