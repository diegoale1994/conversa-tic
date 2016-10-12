<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<meta property="og:url"                content="http://conversa-tic.audiplantas.com/" />
	<meta property="og:type"               content="Conversa TIC" />
	<meta property="og:title"              content="Conversa TIC Fusagasuga" />
	<meta property="og:description"        content="Un dia de inspiracion para pensar y actuar en grande" />


    <title>ConversaTic</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">


</head><!--/head-->

@if (Session::has('message'))

@if (Session::get('message') != 'Registro Exitoso! ' )
    <div class="alert alert-danger exito-mensage" id="msg" >
	  {{ Session::get('message') }}
	</div>
@endif

@endif


@if (Session::has('message'))

@if (Session::get('message') == 'Registro Exitoso! ' )
    <div class="alert alert-success error-mensage" id="msg" style="">
	  {{ Session::get('message') }}
	</div>
@endif

@endif

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a target="_blank" href="https://twitter.com/ConversaTICFusa"><i class="fa fa-twitter"></i></a>
						<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
						<a target="_blank" href="https://www.youtube.com/channel/UCXlBQ_3DJ3LRgpKYhdx-A_g"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Inicio</a></li>
		                    <!--<li class="scroll"><a href="#explore">Explorar</a></li> -->                     
		                    <li class="scroll"><a href="#event">Ponentes</a></li>
		                    <li class="scroll"><a href="#about">Nosotros</a></li>                     
		                    <li class="no-scroll"><a href="#twitter">Twitter</a></li>
		                    <li class="no-scroll"><a href="#sponsor">Patrociandores</a></li>
		                    <!--  <li class="no-scroll"><a href="#streaming">streaming</a></li> -->
		                   <!-- <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li> -->
		                    <li class="scroll"><a href="#contact">Contacto</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/slider/bg1.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2>1<span style="text-transform: capitalize;">er</span>   Conversa TIC <strong>Fusagasuga</strong> </h2>
						<h4>Un dia de inspiracion para pensar y actuar en grande</h4>
						<h4 class="free"><a href="#contact">Registrate </a>Entrada libre !</h4>
						<a target="_blank" href="https://twitter.com/ConversaTICFusa">@ConversaTICFusa <!--<i class="fa fa-angle-right"></i> --></a> 
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/bg2.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2>1<span style="text-transform: capitalize;">er</span>   Conversa TIC <strong>Fusagasuga</strong> </h2>
						<h4>Un dia de inspiracion para pensar y actuar en grande</h4>
						<h4 class="free"><a href="#contact">Registrate </a>Entrada libre !</h4>
						<a target="_blank" href="https://twitter.com/ConversaTICFusa">@ConversaTICFusa <!--<i class="fa fa-angle-right"></i> --></a> 
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2>1<span style="text-transform: capitalize;">er</span>   Conversa TIC <strong>Fusagasuga</strong> </h2>
						<h4>Un dia de inspiracion para pensar y actuar en grande</h4>
						<h4 class="free"><a href="#contact">Registrate </a>Entrada libre !</h4>
						<a target="_blank" href="https://twitter.com/ConversaTICFusa">@ConversaTICFusa <!--<i class="fa fa-angle-right"></i> --></a> 
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2> 1<span style="text-transform: capitalize;">er</span> Conversa TIC en:</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>Dias </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">Horas </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">Minutos</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">segundos</p>
						</li>				
					</ul>
				</div>
			</div>
		<!--	<div class="cart">
				<a href="#"><i class="fa fa-shopping-cart"></i> <span>Purchase Tickets</span></a>
			</div> -->
		</div>
	</section><!--/#explore-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading title-head">PONENTES</h2>
					<!--	<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>-->
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-3">
										<div class="single-event">
											<center><img class="img-responsive img-circle" src="images/event/event1.jpg" alt="event-image"></center>
											<div class="text-con">
												<h4>Nelson Enrique Molano Sanchez</h4>
											<h5>Coordinador Nacional Redvolución en Ministerio de Tecnologías de la Información y las Comunicaciones</h5>
											<a target="_blank" href="https://www.linkedin.com/in/nmolano" class="color-link">

											<font >Ver perfil Completo</font>
											<img  WIDTH=35 HEIGHT=35 src="images/link.png" alt="event-image" >
											</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<center><img class="img-responsive img-circle" src="images/event/event2.jpg" alt="event-image"></center>
											<div class="text-con">
											<h4>Edwin Zácipa</h4>
											<h5>International Business Manager innovating in fintech ventures</h5>
											<a target="_blank" href="https://www.linkedin.com/in/fejzn" class="color-link"><font >Ver perfil Completo</font><img  WIDTH=35 HEIGHT=35 src="images/link.png" alt="event-image" ></a>
											
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<center><img class="img-responsive img-circle" src="images/event/event3.jpg" alt="event-image"></center>
											<div class="text-con">
											<h4>Julián R. Figueroa</h4>
											<h5>Emprendedor.Open Innovation, Hackathons, Software Development, Entrepreneurship.</h5>
											<a target="_blank" href="https://www.linkedin.com/in/julianrfigueroa" class="color-link"><font >Ver perfil Completo</font><img  WIDTH=35 HEIGHT=35 src="images/link.png" alt="event-image" ></a>
											
											</div>
										</div>
									</div>

										<div class="col-sm-3">
										<div class="single-event">
											<center><img class="img-responsive img-circle" src="images/event/Jairo.jpg" alt="event-image"></center>
											<div class="text-con">
											<h4>Jairo Alonso García Hurtado</h4>
											<h5>CIS - Chief Information Security
											MISTIC - Master Seguridad de las TICs
											C|EH, L|PT, C|HFI, EC|SA, C|FRI, C|IDF, QGCS, Sec+, C|TI 
											 </h5>
											<a target="_blank" href="" class="color-link"><font >jairo.garcia@theeaglelabs.com</font></a>

											
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			

			</div>			
		</div>
	</section><!--/#event-->

	<section id="about">
		<div class="guitar2 about-content conten-img" >				
			<img class="img-responsive" src="images/estudiantes-gobierno-digital-udec.jpg" alt="guitar" class="img-udec">
		</div>
		<div class="about-content">					
					<h2>Conversa TIC</h2>
					<p style='text-align: justify;'>Somos un grupo de emprendedores de la  Universidad de Cundinamarca buscando un encuentro informal con emprendedores de la región de Sumapaz, mediante la invitación a tomarse una Pola generaremos proyectos en el ámbito social, económico y ambiental.</p>
				<!---	<a href="#" class="btn btn-primary">View Date & Place <i class="fa fa-angle-right"></i></a> -->
				
		</div>
	</section><!--/#about-->
	
	<section id="twitter">
		<div class="container">
			
	
		<div class="row">
	
				   <div class="col-sm-8">
				   	
				   </div>
				   <div class="col-sm-4">
				   <a class="twitter-timeline" data-height="350" href="https://twitter.com/ConversaTICFusa">Tweets by ConversaTICFusa</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          
          

				   </div>
				   <div class="hidden-sm hidden-xs">
			         <img width="30" height="30" src="/images/twit2.png" class="img-twi2 " style="top:120px;">
		           </div>
		  

		</div>
		</div>
	</section><!--/#twitter-feed-->






    	<section id="streaming">
		
		<div class="row">
	

		</div>		
	</section><!--/#twitter-feed-->



	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
			<h2>PATROCINADORES</h2>
				<div class="row">
					<div class="col-xs-6 col-md-3 col-sm-3 col-lg-3">
									
				
									<center><h5><a class="a-show" target="_blank" href="http://www.theeaglelabs.com/">

										<img class="img-responsive " src="images/EagleLabs.png" alt="event-image">

										</a></h5></center>
                                        <div class="text-con">
											<h3><strong>THE EAGLE LABS</strong></h3>
											<h5> Empresa líder en la prestación de servicios de "Hacking Ético" y "Penetration Test", con soluciones innovadoras enfocadas a verificar los controles de ciberseguridad con los más altos estándares de calidad, generando total confianza en nuestros clientes y nuestra sociedad desde el año 2012, con más de quinientos (500) proyectos asociados a nuestros servicios.
                                            </h5>

                                              <br>
											
										</div>
					
						</div>
						<div class="col-xs-6 col-md-3 col-sm-3 col-lg-3">
							
				
									<center>	<h5><a class="a-show" target="_blank" href="http://www.mintic.gov.co/">
                                            <img class="img-responsive " src="images/mintic.png" alt="event-image">
										</a></h5></center>
										<br>
										<center>	<h5><a class="a-show" target="_blank" href="http://www.mintic.gov.co/">
                                            <img class="img-responsive " src="images/gente.png" alt="event-image">
										</a></h5></center>
                                        <div class="text-con">
											<h3><strong></strong></h3>
											<h5>  </h5>

									
											
										</div>
					
						</div>
					</div>
				</div>				
			</div>
			<div class="light">
				<img class="img-responsive" src="images/light.png" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->

	<section >
		<div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap"> 				
	 			</div>	 			
	    	</div>
		</div><!--/#map-->
		<div class="contact-section" id="contact">
			<div class="ear-piece">
				<img class="img-responsive" src="images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-address" style="padding-left:15px">
							<h3>Contacto</h3>
							<address>
							<i class="fa fa-envelope"></i> conversatic@gmail.com<br>
				 			<i class="fa fa-envelope"></i> julian23salinas@gmail.com<br>
			            	<i class="fa fa-twitter"></i> @julsal23<br>
						    <i class="fa fa-skype"></i>  julian.salinas23<br>
							<i class="fa fa-phone"></i> (301) 770-4114<br>
							<i class="fa fa-map-marker"></i> Fusagasuga ,Colombia
							</address>
						</div>
					</div>
				<div class="col-sm-5"  id="form-fond">
						<div id="contact-section">
							<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
							<form method="POST" action="/registro" accept-charset="UTF-8">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<h1>Registro Conversa TIC</h1> 	

					<h3><span class="registrados">Registrados  </span><span class="num-registrados">{{ 50+$numeroRegistrados }}</span></h3> 

						<div class="form-group">
								<label for="name">Ingresa tu nombre</label>
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
								<input class="form-control" name="twitter" type="text" required placeholder="@example">
						</div>
						<div class="form-group">
								<label for="twitter">Ingresa tu telefono</label>
								<input class="form-control" name="telefono" type="text" required>
						</div>
						<input class="form-contro btn btn-primary" name="registro" value="Registrar" type="submit" required >
						
						</form>
	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2016 ConversaTic</p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
<style type="text/css">

	#content
	{
		     color: black;
	}

	.text-con
	{
									
	        text-align: center;
	        color:#bdc3c7;
	}

	#event
	{
	        background-image: url("../images/twitter-bg.jpg");
	}

	#event-carousel .title-head
	{
		    color: black;
	}
								
	.img-twi
	{
			position: absolute;
			z-index: 300;
	}

	.img-twi2
	{
			position: absolute;
			z-index:344;
			float:right;
			right: 0px;
			top:90px;
	}

	.a-show{
			color: black;
			font-size: 25px;
			}
    .color-link{
 	        color: #163119;
    }
    .free{
    	background-color: #D35400;
    	padding:5px;
    
    }
    #main-slider .carousel-caption .free > a{
    	color: #2ECC71;
    	font-size: 25px;
    }
    .registrados{
		background-color: #212020;
		padding: 5px; 
		color:white;
			    }
	.num-registrados{
		background-color: #d35400;
	    padding: 5px; 
		padding-right: 15px;
		padding-left: 15px;
		color:white;
					}
    

		#main-slider .carousel-caption 
		{
			bottom: 25%;
			left: initial;
			right: 0px;
		}
	
	.img-udec{
		margin-left: 30px;
	}

	.conten-img{
		padding: 100px 100px 110px; margin-left: 40px;
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB73-N-hRiVxeHcVKgLyRclsx5YpW1-O1M&callback=initMap"
    ></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  
    <script type="text/javascript">
	$(document).ready(function() {if ( $("#msg") ) {$("#msg").delay(2000).fadeOut("slow");}});
</script>
</body>
</html>