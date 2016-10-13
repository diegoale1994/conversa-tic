<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">


</head>

<body>


<br>
<br>
<br>

<div class="container">
	<div class="row">
	<center><strong><h3>Registro Conversa TIC</h3></strong></center>
	<br><br>
		<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" >
<thead >
	<th>NOMBRE</th>
	<th>EMAIL</th>
	<th>EDAD</th>
	<th>ROL</th>
	<th>GENERO</th>
	<th>UBICACION</th>
	<th>TWITTER</th>
	<th>TELEFONO</th>
	<th>FECHA</th>
	<th>REGISTRO</th>
</thead>
@foreach($users as $user)
<tbody>
<th>{{ $user -> name }}</th>
<th>{{ $user -> email }}</th>
<th>{{ $user ->	edad }}</th>
<th>{{ $user -> rol }}</th>
<th>{{ $user -> genero }}</th>
<th>{{ $user -> ubicacion }}</th>
<th><a target="_blank" href="https://twitter.com/{{ $user -> twitter }}">{{ $user -> twitter }}</a</th>
<th>{{ $user -> telefono }}</th>
<th>{{ $user -> fecha }}</th>
<th>
@if ($user -> estado == 'N')
	NO CONFIRMADO
@else
	CONFIRMADO
	@endif
	</th>
</tbody>
@endforeach
</table>


<h3>TOTAL DE PERSONAS: {{ $users_count }}</h3>
<h3>TOTAL DE PERSONAS NO VERIFICADAS: {{ $users_count_no }}</h3>

</div>
	</div>
</div>



</div>

<div class="container">
<div class="row">
	<div class="table-responsive">
<div class="col-sm-6">
	
<table class="table table-striped table-bordered table-hover" id="ubicacion" >
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
</div>
<div class="col-sm-6">
	<table class="table table-striped table-bordered table-hover" id="genero" >
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
</div>

</div>
</div>
</div>

<div class="container">
<div class="row">
	<div class="table-responsive">
<div class="col-sm-6">
	<table class="table table-striped table-bordered table-hover" id="edad" >
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
</div>
<div class="col-sm-6">
		
	<table class="table table-striped table-bordered table-hover" id="roles" >
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

</div>
</div>
</div>

</div>










    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2016 ConversaTic</p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
<style type="text/css">
body{
	background-image: url(../images/twitter-bg.jpg);
}
table{
	color: #555;
}

thead tr th {
	background-color: #2980b9;
	text-align: center;
	color: white;
}
h3{
	color: #555;
}
#edad thead tr th ,#genero thead tr th ,#ubicacion  thead tr th ,#roles thead tr th {
   background-color: #e67e22;
   color: white;
}

	     
</style>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</script>
</body>
</html>

