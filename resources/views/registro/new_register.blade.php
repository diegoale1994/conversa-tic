<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap2.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
@if (Session::has('message'))

@if (Session::get('message') != 'Registro Exitoso!' )
    <div class="alert alert-danger exito-mensage" id="msg" style="height:100px">
  <br>
	  {{ Session::get('message') }}
	</div>
@endif

@endif


@if (Session::has('message'))

@if (Session::get('message') == 'Registro Exitoso!' )
    <div class="alert alert-success error-mensage" id="msg" style="height:100px">
  <br>
	  {{ Session::get('message') }}
	</div>
@endif

@endif

<body>


<br>
<br>
<br>


<div class="container"><h1>	<center><h1>Registro Conversa TIC <strong>Fusagasuga</strong></h1> 	</center> </h1></div>
		<div class="" id="contact">
		
			<div class="container">
				<div class="row">
			<div class="col-sm-6">
				<form method="POST" action="/registro_new" accept-charset="UTF-8">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							

					

					

						<div class="form-group">
								<label for="name">Ingresa tu nombre y apellido</label>
								<input class="form-control" name="name" type="text" required>
						</div>
						<div class="form-group">
						<label for="email">Ingresa tu email</label>
								<input class="form-control" name="email" type="email" required placeholder="example@example.com">
						</div>
						<div class="form-group">
								<label for="edad">Ingresa tu edad</label>
						<select name="edad" class="form-control" required>
						 <option selected  value="" disabled>Selección una opción </option>
						  <option value="10a20">Mayor a 10 y menor a 20 </option>
						  <option value="20a30">Mayor a 20 y menor a 30 </option>
						  <option value="30a40">Mayor a 30 y menor a 40 </option>
						  <option value="40aINF">Mayor a 40 años</option>
						</select>
						</div>
						<div class="form-group">
								<label for="rol">Ingresa tu rol</label>
						<select name="rol" class="form-control" required>
						 <option selected value="" disabled>Selección una opción </option>
						  <option value="Estudiante">Estudiante </option>
						  <option value="Empresario">Empresario</option>
						  <option value="Publico">Servidor publico </option>
						  <option value="General">Comunidad en general</option>
						</select>


			
						</div>
						
			</div>
			<div class="col-sm-6">
				<div class="form-group">
								<label for="genero">Ingresa tu genero</label>
						<select name="genero" class="form-control" required>
						 <option selected  value="" disabled>Selección una opción </option>
						  <option value="M">Masculino </option>
						  <option value="F">Femenino</option>
						  <option value="O">Otro </option>
						</select>
						</div>
						<div class="form-group">
								<label for="ubicacion">Ingresa desde que sitio vienes</label>
								<input class="form-control" name="ubicacion" type="text" required>
						</div>
						<div class="form-group">
								<label for="twitter">Ingresa tu pagina de twitter</label>
								<input class="form-control" name="twitter" type="text"  placeholder="@example">
						</div>
						<div class="form-group">
								<label for="twitter">Ingresa tu telefono</label>
								<input class="form-control" name="telefono" type="text" required>
						</div>
                                                
                                                 
						<div class="form-group">
						<div class="g-recaptcha" data-sitekey="6LcQWgkUAAAAAHImwB7ypCpjncW4ehTB_uuAfJok"></div>
						</div>

						<input class="form-contro btn btn-primary" id="registro" name="registro" value="Registrar" type="submit" required >
						
						</form>

						<br>
						<br>
						<br>

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



#contact-section .form-control{

    border-color: black;
}

#registro{
	padding: 10px;
	padding-left: 20px;
	padding-right: 20px;
	border-radius: 0px;

}

	.exito-mensage{
		margin-bottom: 0px ; background-color:#C34C39; color:#800818; border:1px solid #C34C39; border-radius:0px;
	}
	.error-mensage{
		margin-bottom: 0px; background-color:#75B46E; color:green; border:1px solid #75B46E; border-radius:0px; 
	}

</style>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {if ( $("#msg") ) {$("#msg").delay(5000).fadeOut("slow");}});
    </script>
</script>
</body>
</html>

