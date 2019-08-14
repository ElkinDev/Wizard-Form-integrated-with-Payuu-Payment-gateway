<?php
require_once('../clases/accion.class.php');
$objConsultarDatos = new ConsultarDatos;
session_start();

  $lugarBannerG  = 'CO';
  $categoBannerG = '8';
  $listBannerG = $objConsultarDatos->list_banner_categoria(array($lugarBannerG,$categoBannerG)); 
  $row_list_BannerG = mysql_fetch_array($listBannerG); 
  $cantidadBannerG = mysql_num_rows($listBannerG);

     $listInverCarga = $objConsultarDatos->list_admision_consecutivo();
	 $numInverCarga  = mysql_num_rows($listInverCarga);
	 $resulInver     = mysql_fetch_array($listInverCarga);

	 $idUtimo = $resulInver['n_formulario'];
	 $consecutivoA = str_pad($idUtimo+1,4,'0',STR_PAD_LEFT);


	$mes = date('m');
	$anoN = date('Y');
	$fechaComHoy = date('Y-m-d');
	
	function sumaFechas ($suma,$fechaInicial = false)
	{
	  $fecha = !empty($fechaInicial) ? $fechaInicial : date('Y-m-d');
	  $nuevaFecha = strtotime ($suma , strtotime ( $fecha ) ) ;
	  $nuevaFecha = date ( 'Y-m-d' , $nuevaFecha );
	  return $nuevaFecha;
	}
	$FechaFutura  = sumaFechas('+1 year', $fechaComHoy);
	
		$porcionesFutura = explode("-", $FechaFutura);	
		$anoFutura	= $porcionesFutura[0];
		$mesFutura	= $porcionesFutura[1];
		$diaFutura  = $porcionesFutura[2];
	
	$FechaVigente  = $fechaComHoy;
	
		$porcionesVigente = explode("-", $FechaVigente);	
		$anoVigente	= $porcionesVigente[0];
		$mesVigente	= $porcionesVigente[1];
		$diaVigente	= $porcionesVigente[2];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fomurlario de Admision | Colegio Refous  </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/form-wizard.png" alt="">
			</div>
            <form method="post" id="frmaccion" action="https://checkout.payulatam.com/ppp-web-gateway-payu/" target="_blank"  >
            	<!-- SECTION 1<div class="form-header">
            		<a href="#">Formulario de Admision</a>
            		<h3>Solicitud de Admision</h3>
            	</div> -->
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                	<h3>DATOS DEL CANDIDATO</h3>

	                   	<div class="row">
	                   		<div class="col-md-6">
	                   		<div class="form-row" style="margin-bottom: 26px;">
		                    	<label for="">
		                    		Curso al cual aspira el candidato
		                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="Primer Jardín" class="option">Primer Jardín</option>
									<option value="Segundo Jardín" class="option">Segundo Jardín</option>
									<option value="1° de primaria" class="option">1° de primaria</option>
									<option value="2° de primaria" class="option">2° de primaria</option>
									<option value="3° de primaria" class="option">3° de primaria</option>
									<option value="4° de primaria" class="option">4° de primaria</option>
									<option value="5° de primaria" class="option">5° de primaria</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    
	                   		</div>
	                   		<div class="col-md-6">
	                   			<div class="form-row">
		                    	<label for="">
		                    		Para el año:
		                    	</label>
		                    	<div class="form-holder">
		                    		<select name="" id="" class="form-control" required>
										<option value="canvas" class="option">2020</option>
									</select>
									<i class="zmdi zmdi-caret-down"></i>
		                    	</div>
	                    </div>

	                   		</div>

	                   	</div>	
	                    	<div class="form-row">
	                    		<label for="">
	                    		Nombres del candidato:
	                    		</label>
	                    		<div class="form-holder">
	                    			<input type="text" class="form-control" required>
	                    		</div>
	                    	</div>
	                    	<div class="form-row">
	                    		<label for="">
	                    		Apellidos del candidato:
	                    		</label>
	                    		<div class="form-holder">
	                    			<input type="text" class="form-control" required>
	                    		</div>
	                    	</div>
	                    	<div class="form-row">
	                    		<label for="">
	                    		Lugar de nacimiento:
	                    		</label>
	                    		<div class="form-holder">
	                    			<input type="text" class="form-control" required>
	                    		</div>
	                    	</div>
	                    	<div class="form-row">
		                    	<label for="">
		                    		Fecha de nacimiento:
		                    	</label>
		                    	<div class="form-holder">
		                    		<input type="text" class="form-control datepicker-here" data-language='sp' data-date-format="yyyy - mm - dd" id="dp1">
		                    	</div>
	                    	</div>	
	                    
	                    <div class="form-row">
	                    	<label for="">
	                    		Edad:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="4" class="option">4</option>
									<option value="5" class="option">5</option>
									<option value="6" class="option">6</option>
									<option value="7" class="option">7</option>
									<option value="8" class="option">8</option>
									<option value="9" class="option">9</option>
									<option value="10" class="option">10</option>
									<option value="11" class="option">11</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    
	                    <div class="form-row">
	                    	<label for="">
	                    		Años (al próximo 31 de Diciembre):
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" required>
	                    	</div>
	                    </div>		
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                	<h3>DATOS DEL PADRE</h3>
	                	<div class="form-row">
	                    	<label for="">
	                    		Nombres del padre:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Apellidos del padre:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Número de cédula:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Profesion:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Dirección de Domicilio:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Dirección de oficina:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono de oficina:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                </section>

	                <!-- SECTION 3

	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Gender:
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="gender" value="male" checked> Male<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="gender" value="female"> Female<br>
										<span class="checkmark"></span>
									</label>
									<label>
										<input type="radio" name="gender" value="transgender">Transgender<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	 -->
					<h4></h4>
	                <section>
	                	<h3>DATOS DE LA MADRE</h3>
	                	<div class="form-row">
	                    	<label for="">
	                    		Nombres del padre:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Apellidos del padre:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Número de cédula:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Profesion:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Dirección de Domicilio:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Dirección de oficina:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono de oficina:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                	
	                </section>
	                <!-- SECTION 4 -->
	               <h4></h4>
	                <section>
	                	<h3>REFERENCIAS</h3>
	                	<h4>25. PRIMER PERSONA DE REFERENCIA CONOCIDA DEL COLEGIO (o particular)</h4>
	                	<div class="form-row">
	                    	<label for="">
	                    		Nombres:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Apellidos:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Profesion:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Dirección:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono Domicilio:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono de oficina:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Naturaleza de las relaciones:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                </section>

	                <!-- SECTION 5 -->

					<h4></h4>
	                <section>
	                	<h3>REFERENCIAS</h3>
	                	<h4>26. SEGUNDA PERSONA DE REFERENCIA CONOCIDA DEL COLEGIO (o particular)</h4>
	                	<div class="form-row">
	                    	<label for="">
	                    		Nombres:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Apellidos:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Profesion:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Dirección:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono Domicilio:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Teléfono de oficina:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Naturaleza de las relaciones:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                </section>


					<!-- SECTION 6 -->

					<h4></h4>
	                <section>
	                	<h3>EMAIL DE COMUNICACION</h3>
	                	<div class="form-row">
	                    	<label for="">
	                    		email:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="email" class="form-control">
	                    	</div>
	                    </div>
	                </section>

	                <!-- SECTION 7 -->

	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		Course ID:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. abc 12345 or abc 1234L">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Course Title:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. Intro to physic">
	                    	</div>
	                    </div>	
                     	<div class="form-row">
	                    	<label for="">
	                    		Section(s):
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. 3679 or 33fa, 4295">
	                    	</div>
	                    </div>	
	                    <div class="form-row" style="margin-bottom: 38px">
	                    	<label for="">
	                    		Select Teacher:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
	                    			<option value="frances meyer" class="option">Frances Meyer</option>
									<option value="johan lucas" class="option">Johan Lucas</option>
									<option value="merry linn" class="option">Merry Linn</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="checkbox-circle" style="margin-bottom: 48px;">
							<label>
								<input type="checkbox" checked>I agree all statement in Terms & Conditions
								<span class="checkmark"></span>
							</label>
						</div>


						 <?php 
    // Generacion de Firmas 
          
		
    $moneda           = 'COP';  
    $iva              = 0;
    $dateRef          = 'CFR-'.date('hisdmY');
    $refVenta         = $dateRef;
    $llave_encripcion = '7BLF7vyoHcVjvSN6yVt7KHd1Lm';					
    $usuarioId        = '628342'; //merchantId


    $descripcion      = 'Gracias por elegirnos COLEGIO REFOUS mayor información. Teléfono: (57) (1) 8763197, E-mail de contacto: info@refous.com';
    $accountId        = '630651';					
    $valorRefe 	      = '60000';//'60000.00';
    $firma            = $llave_encripcion.'~'.$usuarioId.'~'.$refVenta.'~'.$valorRefe.'~'.$moneda;
    $firma_codificada = md5($firma);

    ?>
    <!-- //ApiKey -->
     <input name="ApiKey" id="ApiKey" type="hidden" value="<?php echo $llave_encripcion;?>">
    <!-- //Identificación merchantId -->
     <input name="merchantId" id="merchantId" type="hidden" value="<?php echo $usuarioId;?>">
    <!-- //Unico para transacción referenceCode -->
     <input name="referenceCode" id="referenceCode" type="hidden" value="<?php echo $refVenta;?>">
    <!-- //Descripción de la venta description-->
     <input name="description" id="description" type="hidden" value="<?php echo $descripcion;?>">
    <!-- //IVA tax -->
     <input name="tax" id="tax" type="hidden" value="0">
    <!-- //Valor total amount -->
     <input name="amount" id="amount" type="hidden" value="<?php echo $valorRefe;?>">
    <!-- ///Valor base calculo venta taxReturnBase -->
     <input name="taxReturnBase" id="taxReturnBase" type="hidden" value="0">
    <!-- //Firma signature Es la firma digital creada para cada uno de las transacciones -->
     <input name="signature" id="signature" type="hidden" value="<?php echo $firma_codificada;?>">
    <!-- //accountId Identificador de la cuenta del usuario para cada país  -->
     <input name="accountId" id="accountId" type="hidden" value="<?php echo $accountId;?>">
    <!-- //Moneda currency -->
     <input name="currency" id="currency" type="hidden" value="<?php echo $moneda;?>">
    <!-- //shippingCountry El código ISO del país de entrega de la mercancía.  -->
     <input name="shippingCountry" id="shippingCountry" type="hidden" value="CO">

    <!-- //shippingAddress La dirección de entrega de la mercancía.
	//echo "<input name='shippingAddress' id='shippingAddress' type='text' style='display:none'>";
	//echo "<input name='currency' type='text' value='".$monedas' style='display:none'>";
		//buyerEmail
	//echo "<input name='buyerEmail' type='text' value='test@test.com' style='display:none'>"; -->

     <!-- <input name="test" id="test" type="hidden" value="0"> -->
    <!-- //confirmationUrl Url pagina de confirmación  -->
     <input name="confirmationUrl" id="confirmationUrl" type="hidden" value="https://colegiorefous.edu.co/confirmacion.php">
    <!-- //responseUrl Url pagina de respuesta   -->
     <input name="responseUrl" id="responseUrl" type="hidden" value="https://colegiorefous.edu.co/respuesta.php">
    <!-- //responseUrl Url pagina de respuesta   -->
     <input name="consecutivoFor" id="consecutivoFor" type="hidden" value="<?php echo $consecutivoA;?>">
     
  
	                </section>
	                
            	</div>
            </form>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>