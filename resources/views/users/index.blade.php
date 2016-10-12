
<table border="1" CELLPADDING=10>
<thead>
	<th>NOMBRE</th>
	<th>EMAIL</th>
	<th>EDAD</th>
	<th>ROL</th>
	<th>GENERO</th>
	<th>UBICACION</th>
	<th>TWITTER</th>
	<th>TELEFONO</th>
	<th>FECHA</th>
</thead>
@foreach($users as $user)
<tbody>
<th>{{ $user -> name }}</th>
<th>{{ $user -> email }}</th>
<th>{{ $user ->	edad }}</th>
<th>{{ $user -> rol }}</th>
<th>{{ $user -> genero }}</th>
<th>{{ $user -> ubicacion }}</th>
<th>{{ $user -> twitter }}</th>
<th>{{ $user -> telefono }}</th>
<th>{{ $user -> fecha }}</th>
</tbody>
@endforeach
</table>
TOTAL DE REGISTROS: {{ $users_count }}
</div>

<table border="1" CELLPADDING=10>
<thead>
	<th>UBICACION</th>
	<th>CANTIDAD</th>
</thead>
@foreach($users_count_ubication as $user)
<tbody>
<th>{{ $user -> ubicacion }}</th>
<th>{{ $user -> cantidad }}</th>
</tbody>
@endforeach
</table>

<table border="1" CELLPADDING=10>
<thead>
	<th>GENERO</th>
	<th>CANTIDAD</th>
</thead>
@foreach($users_count_genre as $user)
<tbody>
<th>{{ $user -> genero }}</th>
<th>{{ $user -> cantidad }}</th>
</tbody>
@endforeach
</table>

<table border="1" CELLPADDING=10>
<thead>
	<th>EDAD</th>
	<th>CANTIDAD</th>
</thead>
@foreach($users_count_age as $user)
<tbody>
<th>{{ $user -> edad }}</th>
<th>{{ $user -> cantidad }}</th>
</tbody>
@endforeach
</table>
<table border="1" CELLPADDING=10>
<thead>
	<th>ROLES</th>
	<th>CANTIDAD</th>
</thead>
@foreach($users_count_rol as $user)
<tbody>
<th>{{ $user -> rol }}</th>
<th>{{ $user -> cantidad }}</th>
</tbody>
@endforeach
</table>

