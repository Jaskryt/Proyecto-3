<form method="POST" action="{{ route('Riniciar') }}">
	@csrf
	<input type="text" name="nickname" placeholder="Ingrese su nickname..." value="{{ old('nombre') }}"><br>
	<input type="password" name="contraseña" placeholder="Ingrese contraseña..."><br>
	<button>Enviar</button>
</form>

