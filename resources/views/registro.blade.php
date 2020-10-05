@extends('layout')


@section('Cuerpo')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <div>
    <center>
      <h1>Registro de Usuarios</h1>
    </center>
  </div>
  <form method="POST" action="{{ route('Registro') }}">
    @csrf
    <center>
      Nombre: <input type="text" placeholder="Coloque su nombre" name="nombreUsuario"
      id="nombreUsuario" value="{{ old('nombreUsuario') }}"><br>
      {{ $errors->first('nombreUsuario') }}<br>

      Apellidos: <input type="text" placeholder="Coloque sus apellidos" name="apellidosUsuario" 
      id="apellidosUsuario"  value="{{ old('apellidosUsuario') }}"><br>  
      {{ $errors->first('apellidosUsuario') }}<br>

      Nombre de Usuario: <input type="text" placeholder="Coloque su nickname" name="nicknameUsuario" 
      id="nicknameUsuario" value="{{ old('nicknameUsuario') }}"><br>
      {{ $errors->first('nicknameUsuario') }}<br>

      Correo Electronico: <input type="email" placeholder="Coloque su Email" name="emailUsuario" 
      id="emailUsuario" value="{{ old('emailUsuario') }}"><br>
      {{ $errors->first('emailUsuario') }}<br>

      Fecha de Nacimiento: <input type="date"  name="fechanacUsuario" 
      id="fechanacUsuario" value="{{ old('fechanacUsuario') }}"><br>
      {{ $errors->first('fechanacUsuario') }}<br>

      Contraseña: <input type="password" placeholder="Coloque su contraseña" name="passwordUsuario" 
      id="passwordUsuario" value="{{ old('passwordUsuario') }}"><br>
      {{ $errors->first('passwordUsuario') }}<br>
      
      Confirmar Contraseña: <input type="password" placeholder="vuelva a escribir la contraseña" name="confirmarPasswordUsuario" 
      id="confirmarPasswordUsuario" value="{{ old('confirmarPasswordUsuario') }}"><br>
      {{ $errors->first('confirmarPasswordUsuario') }}<br>
      <button>Registrarse</button>

    </center>
  </form>
</body>
</html>
@endsection