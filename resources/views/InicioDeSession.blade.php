<form method="POST" action="{{ route('Riniciar') }}">
	@csrf
	<center style='padding-top: 300px'>
		<input type="text" name="nickname" placeholder="Ingrese su nickname..." value="{{ old('nombre') }}"><br>
		<input type="password" name="contraseña" placeholder="Ingrese contraseña..."><br>
		<button>Enviar</button>
	</center>
</form>