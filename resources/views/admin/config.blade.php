<!-- Blade: Definindo um Template -->

@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')

<h1>Cadastro Cliente</h1>

@alert
Frase de Alerta!
@endalert

<!--LOOPS -->
<ul>
    @forelse($lista as $item)

    <li>{{$item}}</li>

    @empty

    <li>Não há Ingredientes</li>

    @endforelse
</ul>


<form method="POST" action="">

@csrf <!-- -->

Nome: <br>
<input type="text" name="nome"><br>

Idade: <br>
<input type="text" name="idade"><br>

Cidade: <br>
<input type="text" name="estado"><br>

<input type="submit" value="Enviar"><br>

</form>

<a href="/config/info">Informações</a>
@endsection
