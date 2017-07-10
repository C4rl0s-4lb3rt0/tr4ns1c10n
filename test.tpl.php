<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bootstrap example landing</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $vars->base_theme.'/assets/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $vars->base_theme.'/assets/css/test.css';?>" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">Landing Name</h3>
      </div>

      <div class="jumbotron">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
        <p class="lead"> Fusce orci ipsum, vehicula non dui vestibulum, mattis luctus augue. Nam in magna quis nisi pretium gravida. Suspendisse viverra ornare ligula, eu finibus leo eleifend et. Integer suscipit urna eget justo posuere pretium. 
        </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Button</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
       		<div class="row">
			<div class="col-xs-2">
			</div>
			<div class="col-xs-8 ">
				<p class="text-center">
					Déjanos tus datos y un ejecutivo se pondrá en contacto contigo a la 
	brevedad para ofrecerte detalles sobre nuestra oferta inmobiliaria.
				</p>
				<br>
					<form class="form-horizontal" role="form" action="welcome.php" method="post">
						<div class="form-group">
							<label  class="col-lg-2 control-label">Nombre(s):</label>
						    <div class="col-lg-6">
						      	<input type="txt" class="form-control" name="nombre"
						             placeholder="Nombre(s)">
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">Apellido Paterno:</label>
						    <div class="col-lg-6">
						      	<input type="txt" class="form-control" name="app"
						             placeholder="Apellido Paterno">
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">Apellido Materno:</label>
						    <div class="col-lg-6">
						      	<input type="txt" class="form-control" name="apm"
						             placeholder="Apellido Materno">
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">Correo Electronico:</label>
						    <div class="col-lg-6">
						      	<input type="txt" class="form-control" name="mail"
						             placeholder="Correo Electronico">
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 col-md-2 col-lg-2 control-label">Fecha de Nacimiento:</label>
						    <div class="col-sm-3 col-md-3 col-lg-2">
						      	<select class="form-control" name="dia">
								  	<option value="0"> Día </option>
								  	<?php
									  	for ($dia=1; $dia <32 ; $dia++) { 
									  		?><option><?php echo $dia; ?></option><?php
									  	} 
									?>
								</select>
						    </div>
						    <div class="col-sm-3 col-md-3 col-lg-2">
						      	<select class="form-control" name="mes">
								  	<option value="0"> Mes </option>
								  	<option value="1">Enero</option>
								  	<option value="2">Febrero</option>
								  	<option value="3">Marzo</option>
								  	<option value="4">Abril</option>
								  	<option value="5">Mayo</option>
								  	<option value="6">Junio</option>
								  	<option value="7">Julio</option>
								  	<option value="8">Agosto</option>
								  	<option value="9">Septiembre</option>
								  	<option value="10">Octubre</option>
								  	<option value="11">Noviembre</option>
								  	<option value="12">Diciembre</option>
								</select>
						    </div>
						    <div class="col-sm-3 col-md-3 col-lg-2">
						      	<select class="form-control" name="anio">
								  	<option value="0"> Año </option>
								  	<?php
									  	for ($anio=1940; $anio <=1998 ; $anio++) { 
									  		?><option><?php echo $anio; ?></option><?php
									  	} 
									?>
								</select>
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">Lugar de Nacimiento:</label>
						    <div class="col-lg-6">
						      	<select class="form-control" name="lugar">
								  	<option value id="hidden">Selecciona</option>
								  	<option value="AS">Aguascalientes</option>
									<option value="BC">Baja California</option>
									<option value="BS">Baja California Sur</option>
									<option value="CC">Campeche</option>    
									<option value="CS">Chiapas</option>
									<option value="CH">Chihuahua</option>
									<option value="CL">Coahuila</option>
									<option value="CM">Colima</option>
									<option value="DF">Distrito Federal</option>
									<option value="DG">Durango</option>
									<option value="MC">Estado de México</option>
									<option value="GT">Guanajuato</option>
									<option value="GR">Guerrero</option>
									<option value="HG">Hidalgo</option>
									<option value="JC">Jalisco</option>
									<option value="MN">Michoacán</option>
									<option value="MS">Morelos</option>
									<option value="NT">Nayarit</option>
									<option value="NL">Nuevo León</option>
									<option value="OC">Oaxaca</option>
									<option value="PL">Puebla</option>
									<option value="QT">Querétaro</option>
									<option value="QR">Quintana Roo</option>  	    
									<option value="SP">San Luis Potosí</option>
									<option value="SL">Sinaloa</option>
									<option value="SR">Sonora</option>
									<option value="TC">Tabasco</option>
									<option value="TS">Tamaulipas</option>
									<option value="TL">Tlaxcala</option>
									<option value="VZ">Veracrúz</option>
									<option value="YN">Yucatán</option>
									<option value="ZS">Zacatecas</option>
									<option value="NE">Nacido en el Extranjero</option>
								</select>
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">Género:</label>
						    <div class="col-lg-6">
						      	<select class="form-control" name="sexo">
								  	<option select value="0"> Género </option>
								  	<option value="h">Masculino</option>
								  	<option value="m">Femenino</option>
								</select>
						    </div>
						</div>
						<div class="form-group">
							<label  class="col-xs-4 col-sm-2 col-md-2 col-lg-2 control-label">Telefono Fijo:</label>
							<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2" >
							    <input  type="txt" class="form-control" placeholder="LADA" name="lada"maxlength="3">
							</div>
							<label  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 ayuda_lada text-left"><a href="http://localiza.telmex.com/web/buscador?q=&output=xml_no_dtd&oe=UTF-8&ie=UTF-8&client=_nuevo_telmex_claves_lada&proxystylesheet=_nuevo_telmex_claves_lada&entqr=3&entqrm=0&ud=1&getfields=*&site=claves_lada&filter=0&requiredfields=&giro=Mostrar+todo&estado=Mostrar+todo" target="_blank":>?</a></label>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" >
							    <input class = "form-control" type="txt" name="telefonofijo" placeholder="Telefono Fijo">
							</div>
						</div>

						<div class="form-group">
							<label  class="col-lg-2 control-label">Telefono Movil:</label>
						    <div class="col-lg-6">
						      	<input type="txt" class="form-control" name="telefonomovil"
						             placeholder="Telefono Movil">
						    </div>
						</div>
						<div class="checkbox">
						    <label>
						      <input type="checkbox" name="agree">Estoy de acuerdo con los <a href="https://www.ara.com.mx/terminos-y-condiciones"  target="_blank": >Términos del servicio</a> y <a href="https://www.ara.com.mx/politica-de-privacidad"  target="_blank": >Política de Privacidad</a>	

						  </label>
						  </div>
						  <br>
						<div class="form-group text-center">
						    <div class="col-lg-offset-2 col-lg-6">
						    	<button type="submit" class="btn btn-primary">Solicitar Llamada</button>
						    </div>
						</div>
					</form>
			</div>
			<div class="col-xs-2">
			</div>
		</div>

      <footer class="footer">
        <p><a href="http://ara.com.mx">ara.com.mx</a></p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
