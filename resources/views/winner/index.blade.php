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

<body>




<div class="container"><h1>	<center><strong>¡ ¡ ¡ Y EL GANADOR ES !!!</strong></center> </h1> <br> <br></div>
						

<div id="output">..</div>
<br>
<br>
<div id="namewinner">. . . . . . . . . . . . . . . . . .</div>
<br>
<br>
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

#output {
    margin: auto;
    padding: 20px;
    background: gray;
    border-radius: 10px;
    font-size: 80px;
    width: 160px;
    align: center;
    color: white;
    text-align: center;
}
#namewinner {
    margin: auto;
    padding: 20px;
    background: gray;
    border-radius: 10px;
    font-size: 80px;
    width: 1000px;
    height: 140px;
    color: white;
    align: center;
    text-align: center;
}





	     
</style>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    var output, started, duration, namewinner;

	duration = 100;
	usuarios = {!! json_encode($final_users) !!};
	range = usuarios.length;
	output = $('#output');
	namewinner = $('#namewinner');
	started = 0;
	duration2 = 10;
   	started2 =0;
   	numeroGanador=0;

	animationTimer = setInterval(function() {

    if (started < duration) {
    	numeroGanador = Math.floor(Math.random() * range); 
        output.text(numeroGanador);
        started = started + 1;

    }else{
    	namewinner.text(usuarios[numeroGanador]);
    }
}, 100);
    animationTimer2 = setInterval(function(){
    	if(started2 < duration2){
    		if(started2 % 2 == 0){
    			namewinner.text('');
    		}else{
    			namewinner.text('. . . . . . . . . . . . . . . . . .');
    		}
    		started2 = started2 +1;
    	}
    	else{
				
    	}
    },1000);
    
    </script>

</script>
</body>
</html>

