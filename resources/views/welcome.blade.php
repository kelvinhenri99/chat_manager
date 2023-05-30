@extends('layout.main')

@section('content')

	<div>
		<h1>CHAT MANAGER</h1>
		<h3>O melhor chat online gratuito</h3>
		<p>Conheça tudo que podemos te proporcionar</p>
	</div>

	<div class="loginOrRegister">
		<h1>Cadastre-se aqui</h1>
		<h1 class="itemOU">ou</h1>
		<h1>Entre no sistema</h1>
		<a href="/register">cadastrar-se</a>
		<a href="/login">Entrar</a>
	</div>

@endsection
