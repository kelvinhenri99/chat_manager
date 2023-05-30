@extends('layout.main')

@section('content')

<div class="linkBack">
	<a href="javascript:history.back()">Página anterior</a>
</div>

<div class="register">
	<h1>Cadastre-se agora mesmo</h1>
	<form action="{{route('register')}}" method="post">
		@csrf
			<div class="backgroundRegister">
				<div>
					<ion-icon name="person"></ion-icon> Nome
				</div>
				<div>
					<input type="text" name="" id="">
				</div>
				<div>
					<ion-icon name="calendar-number"></ion-icon> Data de nascimento
				</div>
				<div>
					<input type="date" name="" id="">
				</div>
				<div>
					<ion-icon name="mail"></ion-icon> Email
				</div>
				<div>
					<input type="email" name="" id="">
				</div>
				<div>
					<ion-icon name="lock-closed"></ion-icon> Senha
				</div>
				<div>
					<input type="password" name="" id="">
				</div>
			</div>
			<input type="reset" value="Limpar">
			<input type="submit" value="Cadastrar">
	</form>
</div>

@endsection
