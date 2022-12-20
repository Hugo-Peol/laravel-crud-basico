<h1>CRIANDO CRUD</h1>



<h2>Cadastro de Nome e telefone</h2>


<form action="/cadastrar" method="POST">
    @csrf
    <label for="">Nome: </label> <br>
    <input type="text" name="nome"> <br><br>
    <label for="">Telefone: </label><br>
    <input type="text" name="telefone"> <br><br>

    <button type="submit"> Enviar dados</button>
</form>
<hr><br>


    
@foreach ($usuarios as $usuario)
<pre>
    ID: {{ $usuario->id  }} <br>
    Nome: {{ $usuario->nome  }} <br>
    Telefone: {{ $usuario->telefone  }} <br>
    <a href="selecion/{{$usuario->id}}">Editar</a> <a href="excluir/{{$usuario->id}}">Excluir</a> 
</pre>
@endforeach

