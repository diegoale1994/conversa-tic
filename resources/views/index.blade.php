<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="Author" content="ConversaTic">
  <meta name="Description" content="ConversaTic Fusagasugá  - Un dia de inspiracion para pensar y actuar en grande">
  <meta name="Keywords" content="tic,paz,conversa,Fusagasugá,emprendimiento,gobierno,digital,inteligentes,startups,innovacion,UDEC,Smart City">
  <meta name="Robots" content="all">
  <meta name="Distribution" content="global">
  <meta name="Language" content="spanish">
  <meta name="Revisit" content="1 days">
    
	<meta property="og:url"                content="http://conversatic-fusagasuga.com/" />
	<meta property="og:type"               content="Conversa TIC" />
	<meta property="og:title"              content="Conversa TIC Fusagasuga" />
	<meta property="og:description"        content="Un dia de inspiracion para pensar y actuar en grande" />


    <title>ConversaTic</title>
    <link rel="icon" type="image/png" href="images/icono.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">


</head><!--/head-->

@if (Session::has('message'))

@if (Session::get('message') != 'Registro Exitoso! INGRESA A TU CORREO PARA CONFIRMAR TU INSCRIPCION ! ' )
    <div class="alert alert-danger exito-mensage" id="msg" style="height:100px">
  <br>
	  {{ Session::get('message') }}
	</div>
@endif

@endif


@if (Session::has('message'))

@if (Session::get('message') == 'Registro Exitoso! INGRESA A TU CORREO PARA CONFIRMAR TU INSCRIPCION ! ' )
    <div class="alert alert-success error-mensage" id="msg" style="height:100px">
  <br>
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
						<!--<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>-->
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
		                <a class="navbar-brand">


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
		                    <li class="no-scroll"><a href="#sponsor">Apoyan</a></li>
		                    <!--  <li class="no-scroll"><a href="#streaming">streaming</a></li> -->
		                   <!-- <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li> -->
		                    <li class="scroll"><a href="#contact">Registro</a></li>       
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
				<br><br>
					<h2><a href="#contact" style="color:black"> </a>  </h2>
				</div>				
				<div class="col-sm-7 col-md-6">
					
						<center><h3><strong>21</strong> de octubre de <strong>2016</strong></h3></center>
					    <center><h3>Hora: <strong>5PM</strong></h3></center>
					    <center><h3>Cámara de comercio Fusagasugá:<strong>Avenida Las Palmas <span style="text-transform: capitalize;">nro.</span>  20-55</strong></h3></center>
								
					<br>		
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

			<style type="text/css">
				.hora{
					background-color:#e67e22;
					padding: 10px;
					color: black;
					border: 10px solid #d35400;
				}
				.hora h3{
					font-size: 25px;
				}
			</style>
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

		
	<section id="twitter">
		<div class="container">
			
	
		<div class="row">

				   <div class="col-sm-8">
				  
				    <!--
				   <iframe style="width:100%; " height="360" src="https://www.youtube.com/embed/DZnxwKUViY4" frameborder="0" allowfullscreen></iframe>
				   -->
				  <center> <img class="img-responsive" src="images/programa.png" style="height:500px; width:50% "></center>
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




	<section id="about">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						<br>
						<br class="hidden-xs hidden-md hidden-lg">
					    <br class="hidden-xs hidden-md hidden-lg">
					    <br class="hidden-xs hidden-md hidden-lg">
					    <br class="hidden-xs hidden-md hidden-lg">
			<img class="img-responsive" src="images/estudiantes-gobierno-digital-udec.jpg"  class="img-udec">
 <br>
	
			</div>
	
			<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						
					<br class="hidden-xs">
					<br class="hidden-xs">
					<br class="hidden-xs">
					<br class="hidden-xs">
                                        <p style="font-size:25px"><strong>Organizan:</strong></p>
					<p style="font-size:22px">Ingeniero Julián Salinas y equipo emprendedores Fusagasugá </p>

					<i class="frase"><i style='font-size: 22px;'>“Cualquier cosa que la mente pueda concebir y creer, puede ser conseguida”</i style='font-size: 18px;'> Napoleon Hill</i>
					<br>
					<br>	
					<p style='text-align: justify;font-size: 20px;' >Somos un grupo de emprendedores Fusagasugueños, buscamos apropiar el buen desarrollo de las Tecnologías de Información y Comunicación (TIC) en el departamento de Cundinamarca-Colombia, desarrollamos iniciativas digitales de valor ciudadano en el ámbito social, gubernamental, económico y ambiental.</p>
				
				<br>
		         </div>
			</div>
		</div>
	</div>
	</section><!--/#about-->
	
	
	</section><!--/#twitter-feed-->


		<section id="sponsor">

			<div class="container">
			<h2>APOYAN</h2>
				
</div>

<aside class="clients">
        <div class="container-fluid">
            <div id="clients-carousel" class="carousel slide " data-ride="carousel">
            <!-- Wrapper for slides -->
              <div class="carousel-inner bar" >
                <div class="item active">
                    <div class="row barra">
                        <div class="col-md-4 col-sm-6">
                            <a target="_blank" href="http://www.theeaglelabs.com/">
                              <center>    <img src="images/EagleLabs.png" class="img-responsive tama" alt=""></center>  
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a target="_blank" href="http://www.mintic.gov.co/">
                              <center>    <img src="images/mintic.png" class="img-responsive tama mintic" alt=""></center> 
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a target="_blank" href="http://www.mintic.gov.co/">
                              <center>    <img src="images/gente.png" class="img-responsive tama mintic" alt=""></center> 
                            </a>
                        </div>
                
                    </div>
                </div><!-- /.item -->
                <div class="item ">
                    <div class="row barra">

                         <div class="col-md-3 col-sm-6">
                            <a target="_blank" href="https://www.redvolucion.gov.co/">
                              <center>    <img src="images/red.jpg" class="img-responsive tama " alt=""></center> 
                            </a>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <a target="_blank" href="http://www.ccb.org.co/La-Camara-CCB/Nuestras-sedes/Sede-Fusagasuga" class="">
                               <center>   <img   src="images/camara.png" class="img-responsive tama camara" alt=""></center> 
                            </a>
                        </div>
                     
                        <div class="col-md-3 col-sm-6">
                            <a target="_blank" href="http://www.ccb.org.co/Clusters/Cluster-de-Software-y-TI">
                              <center>  <img src="images/cluster.jpg" class="img-responsive tama camara" alt=""></center> 
                            </a>
                        </div>

                         <div class="col-md-3 col-sm-6">
                            <a target="_blank" href="http://centrocomercialmanila.com/">
                              <center>    <img src="images/manila.png" class="img-responsive tama " alt=""></center> 
                            </a>
                        </div>
                       
                                             
                    </div> 
                </div><!-- /.item -->



                </div><!-- /.carousel-inner -->
 <br>
 <br>
 <br>
 <br>
 <br>
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#clients-carousel" data-slide-to="1" class=""></li>
                  </ol><!-- /ol -->

            </div><!-- /.carousel -->
        </div><!-- /.container -->
    </aside>


					
				
							
			<br><br>
			<div class="light" id="h" >
				<img  class="img-responsive " height="10" src="images/light.png" alt="">
			</div>
		
	</section><!--/#sponsor-->




    	<section id="streaming">
		
		<div class="row">
	

		</div>		
	</section><!--/#twitter-feed-->








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
							<i class="fa fa-envelope"></i> contacto@conversatic-fusagasuga.com<br>
                                                        <i class="fa fa-twitter"></i> @ConversaTICFusa<br>
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
				<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



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
	.frase{
		font-size: 20px;
	}
	.somos{
		font-size: 25px;
	}
        .light {
 		height: 200px;
		width: 200px;
	}
	.bordear{
       border-radius: 20px;
    height: 130px;
	}
.camara{
width:170px;
}
.tama{
 		height: 100px;
 	}
 	.bar{
 		background-color: white;
 		
 
 	}
 	.barra{
 		background-color: white;
 		padding-top: 10px;
 		padding-bottom: 10px;
 	}
 	.clients{
 		
 		padding-top: 10px;
 		padding-bottom: 10px;

 	}

 	.mintic{
 		margin-top: 18px;
 		height: 70px;
 	}

 	.camara {
 		margin-top: 15px;
 		height: 80px;
 		    }
        .color-g{
               color: red;
 		    }
</style>
    <script src='https://www.google.com/recaptcha/api.js'></script> 
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
	$(document).ready(function() {if ( $("#msg") ) {$("#msg").delay(5000).fadeOut("slow");}});
</script>
</body>
</html>