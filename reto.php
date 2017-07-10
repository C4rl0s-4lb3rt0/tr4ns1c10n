<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing de Kubo</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link  href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="assets/css/landing_kubo.css" rel="stylesheet">
	<!-- <link href="assets/css/test.css" rel="stylesheet"> -->
	<style>
/*		.container-carousel {
			  width: 210px;
			  height: 140px;
			  position: relative;
			  perspective: 1000px;
		}

		#carousel {
			  width: 100%;
			  height: 100%;
			  position: absolute;
			  transform-style: preserve-3d;
		}

		#carousel figure {
			  margin: 0;
			  display: block;
			  position: absolute;
			  width: 186px;
			  height: 116px;
			  left: 10px;
			  top: 10px;
			  border: 2px solid black;
		}
		#carousel figure:nth-child(1) { transform: rotateY(   0deg ); }
		#carousel figure:nth-child(2) { transform: rotateY(  40deg ); }
		#carousel figure:nth-child(3) { transform: rotateY(  80deg ); }
		#carousel figure:nth-child(4) { transform: rotateY( 120deg ); }
		#carousel figure:nth-child(5) { transform: rotateY( 160deg ); }
		#carousel figure:nth-child(6) { transform: rotateY( 200deg ); }
		#carousel figure:nth-child(7) { transform: rotateY( 240deg ); }
		#carousel figure:nth-child(8) { transform: rotateY( 280deg ); }
		#carousel figure:nth-child(9) { transform: rotateY( 320deg ); }


		#carousel figure:nth-child(1) { transform: rotateY(   0deg ) translateZ( 288px ); }
		#carousel figure:nth-child(2) { transform: rotateY(  40deg ) translateZ( 288px ); }
		#carousel figure:nth-child(3) { transform: rotateY(  80deg ) translateZ( 288px ); }
		#carousel figure:nth-child(4) { transform: rotateY( 120deg ) translateZ( 288px ); }
		#carousel figure:nth-child(5) { transform: rotateY( 160deg ) translateZ( 288px ); }
		#carousel figure:nth-child(6) { transform: rotateY( 200deg ) translateZ( 288px ); }
		#carousel figure:nth-child(7) { transform: rotateY( 240deg ) translateZ( 288px ); }
		#carousel figure:nth-child(8) { transform: rotateY( 280deg ) translateZ( 288px ); }
		#carousel figure:nth-child(9) { transform: rotateY( 320deg ) translateZ( 288px ); }
	*/
		.box {
	        width: 100%;
	        height: 100%;
		}

		#red .box:hover{
		 	background-color: brown;
		 	text-align: center;
		 	transform: perspective( 600px ) rotatez( 45deg) rotatex(45deg) scale(1.2);
		}
		#red .box{
		 	background-color: red;
		 	transition: .4s;
		 	/*transform: perspective( 600px ) rotatez( 45deg );*/
		}

		.container {
		        width: 200px;
		        height: 200px;
		        border: 1px solid #CCC;
		        margin: 0 auto 40px;
		}

	</style>
</head>
<body>
	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">  </div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 post">
				<img src="assets/img/ara.png" height="70" width="156" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eaque incidunt optio nemo, quia numquam officiis atque eum impedit pariatur ut vero repudiandae, nulla vel id suscipit soluta adipisci laborum?</p>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		</div>
	</div> -->
<!-- 
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">  </div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 contenedor">
				<h3>Opacidad</h3>
				<div class="transicion caja opacity">Hola Mundo!</div>

				<h3>Fuentes</h3>
				<div class="transicion caja fuente">Hola Mundo!</div>

				<h3>Colores</h3>
				<div class="transicion caja colores">Hola Mundo!</div>
			
				<h2>Transfomaciones</h2>

				
				<h3>Rotación</h3>
				<img src="assets/img/ara.png" height="70" width="156" alt="" alt="" class="transcion rotacion">

				<h3>Escala</h3>
				<img src="assets/img/ara.png" height="70" width="156" alt="" alt="" class="transcion escala">
				
				<h3>Sesgado</h3>
				<img src="assets/img/ara.png" height="70" width="156" alt="" alt="" class="transcion sesgado">
				
				<h3>Traslacion</h3>
				<img src="assets/img/ara.png" height="70" width="156" alt="" alt="" class="transcion traslacion">

				<h3>Mixtas</h3>
				<img src="assets/img/ara.png" height="70" width="156" alt="" alt="" class="transcion mixtas">
			<br><br><br><br><br><br><br><br><br>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		</div>
	</div> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">  </div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
				<div class="flip3d">
					<!-- <div class="back"> <img src="assets/img/LogoARA.png"  alt=""> </div> -->
					<div class="front"> Box - 1  Front </div>
				</div>
				<div class="flip3d">
					<!-- <div class="back"> Box - 2  Back </div> -->
					<div class="front"> Box - 2  Front </div>
				</div>
				<!-- <div class="flip3d">
					<div class="back"> Box - 3  Back </div>
					<div class="front"> Box - 3  Front </div>
				</div>
				<div class="flip3d">
					<div class="back"> Box - 1  Back </div>
					<div class="front"> Box - 1  Front </div>
				</div>
				<div class="flip3d">
					<div class="back"> Box - 2  Back </div>
					<div class="front"> Box - 2  Front </div>
				</div>
				<div class="flip3d">
					<div class="back"> Box - 3  Back </div>
					<div class="front"> Box - 3  Front </div>
				</div>
				<div class="flip3d">
					<div class="back"> Box - 1  Back </div>
					<div class="front"> Box - 1  Front </div>
				</div>
				<div class="flip3d">
					<div class="back"> Box - 2  Back </div>
					<div class="front"> Box - 2  Front </div>
				</div>
				<div class="flip3d">
					<div class="back"> Box - 3  Back </div>
					<div class="front"> Box - 3  Front </div>
				</div> -->
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		</div>
	</div>


<!-- 	Alineacion centrado 1 Inicio -->

	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">  </div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
				<h2>alineaciones Horizontales</h2>
				<h2>Tamaño fijo con Ancho declarado</h2>	
				<div class="caja tipo-a">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In et, animi tempora aliquid maiores dolor a aperiam soluta ex consequatur voluptatum similique eum sit vel dolorem non est, voluptate modi!</p>
				</div>
				<h2>Tamaño fijo usando calc</h2>
				<div class="caja tipo-b">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In et, animi tempora aliquid maiores dolor a aperiam soluta ex consequatur voluptatum similique eum sit vel dolorem non est, voluptate modi!</p>
				</div>
				<h2>elementros con dispaly inline-block</h2>
				<div class="tipo-c">
					<div class="caja">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, officia sapiente maiores, eos, optio delectus quae voluptatem et vero nulla 
						veritatis porro eaque dolorem officiis at dolore, tenetur dicta provident?
					</div>
					<div class="caja">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, officia sapiente maiores, eos, optio delectus quae voluptatem et vero nulla 
						veritatis porro eaque dolorem officiis at dolore, tenetur dicta provident?
					</div>
					<div class="caja">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, officia sapiente maiores, eos, optio delectus quae voluptatem et vero nulla 
						veritatis porro eaque dolorem officiis at dolore, tenetur dicta provident?
					</div>
				</div>
				<h2>elementos con posicion Absoluta A</h2>
				<div class="relative">
					<div class="caja tipo-d">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque impedit ducimus iste labore dolore. Ex suscipit nobis mollitia, consequuntur placeat deserunt incidunt vitae nam fuga. Quam, doloribus, quasi. Aperiam, possimus.
					</div>
				</div>
				<h2>elementos con posicion Absoluta B</h2>
				<div class="relative">
					<div class="caja tipo-e">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque impedit ducimus iste labore dolore. Ex suscipit nobis mollitia, consequuntur placeat deserunt incidunt vitae nam fuga. Quam, doloribus, quasi. Aperiam, possimus.
					</div>
				</div>
				<h2>ELementos con display Flex</h2>
				<div class="tipo-f">
					<div class="caja">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aperiam fugiat enim, temporibus corporis aspernatur doloremque cumque, quae recusandae repellat sequi iusto. Nobis nisi hic necessitatibus optio amet, enim quam!
					</div>
					<div class="caja">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aperiam fugiat enim, temporibus corporis aspernatur doloremque cumque, quae recusandae repellat sequi iusto. Nobis nisi hic necessitatibus optio amet, enim quam!
					</div>
				</div>
				<h2>Alineaciones Verticales</h2>
				<h2>Elementos con display table con ultra soporte a IE</h2>
				<div class="tipo-g">
					<div class="caja">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aperiam fugiat enim, temporibus corporis aspernatur doloremque cumque, quae recusandae repellat sequi iusto. Nobis nisi hic necessitatibus optio amet, enim quam!
					</div>
					<div class="caja">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aperiam fugiat enim, temporibus corporis aspernatur doloremque cumque, quae recusandae repellat sequi iusto. Nobis nisi hic necessitatibus optio amet, enim quam!
					</div>
				</div>
				<h2>Elementos centrados con padding</h2>
				<div class="tipo-h height ">
					<div class="caja">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aperiam fugiat enim, temporibus corporis aspernatur doloremque cumque, quae recusandae repellat sequi iusto. Nobis nisi hic necessitatibus optio amet, enim quam!
					</div>
				</div>
				<h2>Elementos centrado vertical con flex</h2>
				<div class="tipo-i height">
					<div class="caja">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dolores modi quam animi debitis officiis facilis nostrum optio blanditiis, ipsum consequatur similique veritatis, natus tempore sint possimus officia. Culpa, aut.
					</div>
				</div>
				<h2>Elementos centrado vertical de una solo linea</h2>
				<div class="height">
					<p class="tipo-j"> Hola Mundo</p>
				</div>
				<h2>multiples Elementos centrados vertical</h2>
				<article class="tipo-k">
					<img src="assets/img/fc-logo.png" height="60" width="60" alt="">
					<span>@fjaslkdfjasdi.com</span>
					<div>Ver mas...</div>
				</article>
			</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
	</div> -->

	<!-- Alineacion centrado final -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">  </div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
				<!-- <section class="container-carousel">
				  	<div id="carousel">
					    <figure>1</figure>
					    <figure>2</figure>
					    <figure>3</figure>
					    <figure>4</figure>
					    <figure>5</figure>
					    <figure>6</figure>
					    <figure>7</figure>
					    <figure>8</figure>
					    <figure>9</figure>
				  	</div>
				</section> -->
				

				<!-- Otro Ejemplo -->
				<!-- <section>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, suscipit, nihil. Laboriosam molestiae rerum architecto, at iste ducimus, quasi et deleniti possimus perferendis atque doloremque corporis ex porro non minima.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit dignissimos quam, pariatur animi, a eligendi debitis, dolorum aut sequi iusto fugit ipsam. Iure vitae consequuntur voluptates rem totam quidem!
				</section>
				<section id="red" class="container">
				    <div class="box red">
				    	<label for="">prueba</label>
				    </div>
				</section>
				<section>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, suscipit, nihil. Laboriosam molestiae rerum architecto, at iste ducimus, quasi et deleniti possimus perferendis atque doloremque corporis ex porro non minima.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit dignissimos quam, pariatur animi, a eligendi debitis, dolorum aut sequi iusto fugit ipsam. Iure vitae consequuntur voluptates rem totam quidem!
				</section> -->
				<!-- fin otro ejemplo -->
			</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
<!-- 
<script>
	function exampleClass(){
		this.property1 = 5;
		this.property2 = "world";
		this.method1 = function method1(arg1){
			return arg1+""+this.property2;
		}
	}

	var instance1 = new exampleClass();
	var instance2 = new exampleClass();
	alert( instance1.method1("HOla"));
</script>
 -->
</html>