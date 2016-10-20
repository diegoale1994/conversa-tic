<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>

<body>


<br>
<br>
<br>


<div class="container"><h1>	<center><strong>Registro Conversa TIC</strong></center> </h1></div>
						<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" >
						<thead >
							<th>NOMBRE</th>
							<th>EMAIL</th>
							<th>ROL</th>
							<th>TWITTER</th>
							<th>TELEFONO</th>
							<th>FECHA</th>
							<th>INGRESO</th>
						</thead>
						@foreach($users as $user)
						<tbody>
						<th>{{ $user -> name }}</th>
						<th>{{ $user -> email }}</th>
						<th>{{ $user -> rol }}</th>
						<th><a target="_blank" href="https://twitter.com/{{ $user -> twitter }}">{{ $user -> twitter }}</a</th>
						<th>{{ $user -> telefono }}</th>
						<th>{{ $user -> fecha }}</th>
						<th>
						<a align="center" href="{{route('user_stage_registered.store', $user->id)}}" class="form-contro btn btn-primary" >REGISTRAR INGRESO
						</a>
						</th>
						</tbody>
						@endforeach
						</table>

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

body {
  padding : 10px ;
  
}

#exTab1 .tab-content {
  color : white;
 /* background-color: #428bca;*/
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;*/
}
#exTab1 .tab-content{
	padding: 0px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
 /* background-color: #428bca;*/
  padding : 5px 15px;
}






	     
</style>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</script>
</body>
</html>

