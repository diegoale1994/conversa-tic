<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><strong>NOMBRE</strong>{{ $data['nombre'] }}</p>
<p><strong>MENSAJE</strong>Gracias por registrase al evento
este confirma tu direccion aca http://localhost:8000/user_confirm_event/{{ $data['token'] }}
</p>

<p><strong></strong>
</body>
</html>