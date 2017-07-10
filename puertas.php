<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Puertas</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link  href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="assets/css/landing_kubo.css" rel="stylesheet"> -->
</head>
<style>
	

html,body, .container-fluid{

margin:0px;

height:100%;
width: 100%;

}

.container-fluid{
	padding: 0px !important; 
}
.sin_padding{
	padding: 0px !important; 
}


.flip3d{
	width:100%;
	height: 100%;
	/*margin: 10px;*/
	float:left;
}


.flip3d > .front {
	position: absolute;
	-webkit-transform: perspective(-100%);
	
	transform: perspective(-100%);
	
	background: #000;
	width:100%;
	height: 100%;
	/*border-radius: 7px;*/
	-webkit-backface-visibility:hidden;
	backface-visibility:hidden;
	transition: transform 1s linear 0s; 
}



/*.flip3d:hover > .front {
	
	transform: translateX(-100%);
}*/

.flip3d > .front-1 {
	position: absolute;
	-webkit-transform: perspective(-100%);
	
	transform: perspective(-100%);
	
	background: #000;
	width:100%;
	height: 100%;
	/*border-radius: 7px;*/
	-webkit-backface-visibility:hidden;
	backface-visibility:hidden;
	transition: transform 1s linear 0s; 
}

/*.flip3d:hover > .front-1 {
	
	transform: translateX(100%);
}*/

.puertas:hover .flip3d > .front-1 {
	
	transform: translateX(100%);
}

.puertas:hover .flip3d > .front {
	
	transform: translateX(-100%);
}
.absoluta{
	position:relative;
	left:0px;
}
.puertas{
	position: absolute;
	overflow: hidden !important;
}

.puerta_izq{
	 	position: absolute;
        top: 0;
        right: 50%;
        background-color: rgba(64, 89, 110, 0.78);
        height: 100%;
        transform: perspective(-100%);
        backface-visibility:hidden;
		transition: transform 1s linear 0s; 
}


.puerta_der{
		position: absolute;
        top: 0;
        right: 0%;
        height: 100%;
        background-color: rgba(64, 89, 110, 0.78);
        transform: perspective(-100%);
        backface-visibility:hidden;
		transition: transform 1s linear 0s; 
}

body:hover .container-fluid .row .puerta_izq{
	transform: translateX(-100%);

}
body:hover .container-fluid .row .puerta_der{
	transform: translateX(100%);
	
}
.titulo{
	text-align: center;
}
</style>
<body class="puertas"> 
	<div class="container-fluid  ">
		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
				<h1 class="titulo"> L O R E M  </h1>
				<p align="center"><img class="titulo" src="assets/img/ESRlogo.png" height="57" width="116" alt="" style="margin: 0 auto"></p>
				<p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex tempore ullam similique temporibus officiis, sed, laborum saepe itaque molestias? Rerum repellendus et, voluptates laboriosam, quae quam maxime obcaecati placeat molestias.</p>
			</div>
		</div>
		<div class="row  ">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 puerta_izq " >
				<!-- <h3>cortina left </h3> -->
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 puerta_der" >
				<!-- <h3>cortina right</h3> -->
			</div>
		</div>
	</div>
	
	<!-- <div class="container-fluid puertas">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 sin_padding" >
				<div class="flip3d">
					<div class="front"> </div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 sin_padding" >
				<div class="flip3d">
					<div class="front-1">  </div>
				</div>				
			</div>
		</div>
	</div> -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>