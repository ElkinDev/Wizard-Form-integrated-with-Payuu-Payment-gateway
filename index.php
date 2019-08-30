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

	 //$idUtimo = $resulInver['n_formulario'];
		$idUtimo = $resulInver['id_formulario'];
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
		<title>Fomulario de Admision | Colegio Refous  </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="https://www.linkedin.com/in/elkinmendozacova/">
		<meta name="description" content="Colegio campestre ubicado en Bogotá-Cotá. Preescolar, Primaria y Bachillerato, Calendario A. Colegio Refous con más de 60 años de experiencia.">
	    <meta name="keywords" content="colegiorefous.com, colegiorefous.com.co, colegiorefous.edu.co, colegios, Roland Jeangros, Colombia, Refous, Colegio Refous, Siberia, Cota, Educación Colombia, Colegios Bogotá, Colegios Cota, Estudiantes, Primaria, Bachillerato, Colegios Primaria, Colegios Bachillerato, Sapiens Research, Calendario A, Campestre, Educación, Educación a partir de las cosas simples, Monsieur Roland Jeangros, Colegio Campestre; Admisiones 2020"  />
	    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
	    <link rel="apple-touch-icon" href="../images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
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
		<link rel="stylesheet" type="text/css" href="css/ElkinDevTooltip.css">

	</head>
	<body>
		<div class="hmp-loading loading-overlay" id="loadingView">
  <div class="spinner">
</div></div>

		<div class="wrapper">
			<div class="GobackButton">
				<a href="https://colegiorefous.edu.co/admisiones.php"> <i class="fas fa-angle-left"></i> Volver al página del Refous</a>
			</div>
			<div class="image-holder">
				<h1>FORMULARIO DE ADMISION</h1><br>
				<img src="../images/logo.svg" width="200" alt="">
			</div>
            <form method="post" id="frmaccion" action="https://checkout.payulatam.com/ppp-web-gateway-payu/" target="_blank" novalidate >
            	<!--  -->
            	<div id="wizard">
            		<!-- SECTION 1 -->

	                <h4></h4>
	                <section>


	                	<h3>DATOS DEL CANDIDATO</h3>

	                   	<div class="row mb-4">
	                   		<div class="col-md-6">
	                   		<div class="form-row" >
		                    	<label  data-tooltip="Campo Requerido" for="validationCustom01">
		                    		Curso al cual aspira el candidato <i class="far fa-question-circle"></i>
		                    	</label>
	                    	<div class="form-holder">
	                    		<select name="cursocan" id='cursocan' class="form-control" required>
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
	                    	<div class="invalid-feedback inv-sign-cursocan" >
          						Curso del aspirante obligatorio.</div>
	                    </div>
	                    
	                   		</div>
	                   		<div class="col-md-6">
	                   			<div class="form-row">
		                    	<label data-tooltip="Campo Requerido" for="">
		                    		Para el año: <i class="far fa-question-circle"></i>
		                    	</label>
		                    	<div class="form-holder">
		                    		<select name='anovigente' id='anovigente' class="form-control" required>
										 <option value='<?php echo $anoFutura;?>'><?php echo $anoFutura;?></option>
									</select>
									<i class="zmdi zmdi-caret-down"></i>
		                    	</div>
		                    	<div class="invalid-feedback inv-sign-anovigente">
          						Año de inscripción obligatorio.</div>
	                    </div>

	                   		</div>

	                   	</div>	


	                   	 


						<div class="row mb-4">
	                   	 	<div class="col-md-6">
	                   	 		<div class="form-row">
	                    		<label  data-tooltip="Campo Requerido" for="">
	                    		Nombres del candidato: <i class="far fa-question-circle"></i>
	                    		</label>
	                    		<div class="form-holder">
	                    			<input type="text" class="form-control" name="nombrecan" id="nombrecan" type="text" placeholder="1. Nombres del candidato *" required>
	                    		</div>
	                    		<div class="invalid-feedback inv-sign-nombrecan">
          						Campo obligatorio.</div>
	                    	</div>
	                   	 	</div>
		                   	<div class="col-md-6">
		                   		<div class="form-row">
		                    		<label  data-tooltip="Campo Requerido" for="">
		                    		Apellidos del candidato: <i class="far fa-question-circle"></i>
		                    		</label>
		                    		<div class="form-holder">
		                    			<input type="text" class="form-control" name="apellidocan" id="apellidocan" placeholder="1. Apellidos del candidato *" required>
		                    		</div>
		                    		<div class="invalid-feedback inv-sign-apellidocan">
		                    		Campo obligatorio.</div>
	                    		</div>
		                   	</div>

	                   	</div>

	                   	<div class="row mb-4">
	                   	 	<div class="col-md-6">
	                   	 		<div class="form-row">
		                    		<label data-tooltip="Campo Requerido" for="">
		                    		Lugar de nacimiento: <i class="far fa-question-circle"></i>
		                    		</label>
		                    		<div class="form-holder">
		                    			<input type="text" class="form-control" placeholder="Lugar de nacimiento" name="lugarcan" id='lugarcan' required>
		                    		</div>
		                    		<div class="invalid-feedback inv-sign-lugarcan">
          						Campo obligatorio.</div>
	                    		</div>
	                   	 	</div>
		                   	<div class="col-md-6">
		                   		<div class="form-row">
			                    	<label data-tooltip="Campo Requerido" for="">
			                    		Fecha de nacimiento: <i class="far fa-question-circle"></i>
			                    	</label>
			                    	<div class="form-holder">
			                    		<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="yyyy - mm - dd" name="fechacan" id='fechacan'>
			                    	</div>
			                    	<div class="invalid-feedback inv-sign-fechacan">
          						Fecha obligatoria.</div>
	                    	</div>	

		                   	</div>

	                   	</div>
	                    	
	                    	  	<div class="row mb-4">
	                   	 	<div class="col-md-6">
	                   	 		<div class="form-row">
		                    	<label  data-tooltip="Campo Requerido" for="">
		                    		Años (al próximo 31 de Diciembre) <i class="far fa-question-circle"></i>
		                    	</label>
		                    	<div class="form-holder">
		                    		<input type="number" class="form-control" placeholder="" name="edadproximacan" id='edadproximacan'>
		                    	</div>
		                    	<div class="invalid-feedback inv-sign-edadproximacan">
          						Campo obligatorio.</div>
	                    	</div>	
	                   	 	</div>
		                   	<div class="col-md-6">
		                   		<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Edad: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="edadcan" id='edadcan' class="form-control">
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
	                    	<div class="invalid-feedback inv-sign-edadcan">
          						Edad obligatoria.</div>
	                    </div>	
		                   	</div>

	                   	</div>
	                    
	                    
	                    		
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                	<h3>DATOS DEL PADRE</h3>

	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
			                    	<label data-tooltip="Campo Requerido" for="">
			                    		Nombres del padre: <i class="far fa-question-circle"></i>
			                    	</label>
			                    	<div class="form-holder">
			                    		<input type="text" class="form-control" placeholder="Nombres del padre"  name="nombrepadre" id="nombrepadre" required>
			                    	</div>
			                    	<div class="invalid-feedback inv-sign-nombrepadre">
          						Campo obligatorio.</div>
	                    	 	</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
			                    	<label data-tooltip="Campo Requerido" for="">
			                    		Apellidos del padre: <i class="far fa-question-circle"></i>
			                    	</label>
			                    	<div class="form-holder">
			                    		<input type="text" class="form-control" placeholder="Apellidos del padre" name="apellidopadre" id='apellidopadre' required>
			                    	</div>
			                    	<div class="invalid-feedback inv-sign-apellidopadre">
          						campo obligatorio.</div>
	                    		</div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
			                    	<label data-tooltip="Campo Requerido" for="">
			                    		Número de cédula: <i class="far fa-question-circle"></i>
			                    	</label>
			                    	<div class="form-holder">
			                    		<input type="text" class="form-control" name="ccpadre" id='ccpadre' placeholder="CC. No." required>
			                    	</div>
			                    	<div class="invalid-feedback inv-sign-ccpadre">
          						Campo obligatorio.</div>
	                    		</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Profesion: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" placeholder="Profesión" name="profesionpadre" id='profesionpadre' class="form-control" required>
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-profesionpadre">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                	</div>
	                	<div class="row mb-4">
	                		
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Dirección de Domicilio: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" placeholder="Dirección de domicilio" name="dirpadre" id='dirpadre' class="form-control" required>
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-dirpadre">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
			                    	<label data-tooltip="Campo Requerido" for="">
			                    		Teléfono: <i class="far fa-question-circle"></i>
			                    	</label>
			                    	<div class="form-holder">
			                    		<input name="telpadre" id='telpadre' placeholder="ej. 3168669379 o 32395421" type="text" class="form-control" required>
			                    	</div>
			                    	<div class="invalid-feedback inv-sign-telpadre">
          						Campo obligatorio.</div>
	                    		</div>	
	                		</div>
	                	</div>
	                	<div class="row mb-4">
	                		
	                		<div class="col-md-6">
	                			<div class="form-row">
			                    	<label data-tooltip="Campo Requerido" for="">
			                    		Dirección de oficina: <i class="far fa-question-circle"></i>
			                    	</label>
			                    	<div class="form-holder">
			                    		<input name="direofipadre" id='direofipadre'  type="text" class="form-control" required>
			                    	</div>
			                    	<div class="invalid-feedback inv-sign-direofipadre">
          						Campo obligatorio.</div>
	                    		</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Teléfono de oficina: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="teleofipadre" id='teleofipadre' type="text" placeholder="Ej. 13524852 ext 1" class="form-control" required>
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-teleofipadre">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                	</div>
	                
	                    
	                    
	                </section>

	                <!-- SECTION 3 -->
					<h4></h4>
	                <section>
	                	<h3>DATOS DE LA MADRE</h3>


	                		<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Nombres de la madre: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" name="nombremadre" id="nombremadre" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-nombremadre">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Apellidos de la madre: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="apellidomadre" id='apellidomadre' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-apellidomadre">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                	</div>
	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Número de cédula: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="ccmadre" id='ccmadre' type="text"  class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-ccmadre">
          						Campo obligatorio.</div>
	                    </div>
	                    
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Profesion: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="profesionmadre" id='profesionmadre'  type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-profesionmadre">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                	</div>
	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			
	                    <div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Dirección de Domicilio: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="dirmadre" id='dirmadre' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-dirmadre">
          						Campo obligatorio.</div>
	                    </div>
	                    
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Teléfono: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="telmadre" id='telmadre' placeholder="Ej 3152388431 o 314565 ext 1" type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-telmadre">
          						Campo obligatorio.</div>
	                    </div>	
	                		</div>
	                	</div><div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Dirección de oficina: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="direofimadre" id='direofimadre' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-direofimadre">
          						Campo obligatorio.</div>
	                    </div>
	                    
	                		</div>
	                		<div class="col-md-6">
	                		<div class="form-row">
		                    	<label data-tooltip="Campo Requerido" for="">
		                    		Teléfono de oficina: <i class="far fa-question-circle"></i>
		                    	</label>
		                    	<div class="form-holder">
		                    		<input name="teleofimadre" id='teleofimadre' placeholder="Ej. 3975285 ext 342" type="text" class="form-control">
		                    	</div>
		                    	<div class="invalid-feedback inv-sign-teleofimadre">
          						Campo obligatorio.</div>
	                    	</div>
	                		</div>
	                	</div>
	                	
	                    
	                    
	                    
	                	
	                </section>
	                <!-- SECTION 4 -->
	               <h4></h4>
	                <section>
	                	<h3>REFERENCIAS</h3>
	                	<h4>25. REFERENCIA PERSONAL</h4>
	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
		                    	<label data-tooltip="Campo Requerido" for="">
		                    		Nombres: <i class="far fa-question-circle"></i>
		                    	</label>
		                    	<div class="form-holder">
		                    		<input name="nombrerefeu" id='nombrerefeu'type="text" class="form-control">
		                    	</div>
		                    	<div class="invalid-feedback inv-sign-nombrerefeu">
          						Campo obligatorio.</div>
	                    		</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Apellidos:<i class="far fa-question-circle"></i>
	                    	</label> 
	                    	<div class="form-holder">
	                    		<input name="apellidorefeu" id='apellidorefeu' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-apellidorefue">
          						Campo obligatorio.</div>
	                    </div>

	                		</div>
	                	</div><div class="row mb-4">
	                		<div class="col-md-6">
	                			  <div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Profesion: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="profesionrefeu" id='profesionrefeu' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-profesionrefeu">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Dirección: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="direrefeu" id='direrefeu' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-direrefeu">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Teléfono Domicilio: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="telerefeu" id='telerefeu' type="text" placeholder="Ej. 3168669379 o 4561234" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-telerefeu">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Teléfono de oficina: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="teleofirefeu" id='teleofirefeu' placeholder="Ej. 6754567 ext. 541" type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-teleofirefeu">
          						Campo obligatorio.</div>
	                    </div>
	                		</div>
	                	</div>


	                    
	                    
	                    <div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Naturaleza de las relaciones: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="vinculorefeu" id='vinculorefeu' type="text" class="form-control">
	                    	</div>
	                    	<div class="invalid-feedback inv-sign-vinculorefeu">
          						Campo obligatorio.</div>
	                    </div>
	                </section>

	                <!-- SECTION 5 -->

					<h4></h4>
	                <section>
	                	<h3>REFERENCIAS</h3>
	                	<h4>26. REFERENCIA DEL COLEGIO</h4>

	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label  for="">
	                    		Nombres: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="nombrerefed" id='nombrerefed' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label  for="">
	                    		Apellidos: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="apellidorefed" id='apellidorefed' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label  for="">
	                    		Profesion: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="profesionrefed" id='profesionrefed' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label  for="">
	                    		Dirección: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="direrefed" id='direrefed' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label  for="">
	                    		Teléfono Domicilio: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="direrefed" id='telerefed' type="text" placeholder="Ej. 2657535 ext. 3" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label  for="">
	                    		Teléfono de oficina: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="teleofirefed" id='teleofirefed' placeholder="Ej. 6754567 ext. 541" type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                    <div class="form-row">
	                    	<label  for="">
	                    		Naturaleza de las relaciones: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="vinculorefed" id='vinculorefed' type="text" class="form-control">
	                    	</div>
	                    </div>
	                </section>


					<!-- SECTION 6 -->

					<h4></h4>
	                <section>
	                	<h3>EMAIL DE COMUNICACION</h3>
	                	<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		email: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="email" name="buyerEmail" id='buyerEmail' class="form-control">
	                    		<div class="invalid-feedback inv-sign-buyerEmail">
          						Campo obligatorio.</div>
	                    	</div>
	                    </div>
	                </section>

	                <!-- SECTION 7 -->

	                <h4></h4>
	                <section>

	                	

	                	<h3>
	                		LISTA DE HERMANOS DEL CANDIDATO 
	                	</h3>

	                	<h4>Hermano número 1</h4>
	                	
	                    	     
	                    <div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Nombres <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="nombreherma" id='nombreherma' type="text" class="form-control" >
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Apellido <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="apellidoherma" id='apellidoherma' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-4">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Edad:<i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="edadherma" id="edadherma" class="form-control">
	                    			<option value="1" class="option">1</option>
	                    			<option value="2" class="option">2</option>
	                    			<option value="3" class="option">3</option>
	                    			<option value="4" class="option">4</option>
									<option value="5" class="option">5</option>
									<option value="6" class="option">6</option>
									<option value="7" class="option">7</option>
									<option value="8" class="option">8</option>
									<option value="9" class="option">9</option>
									<option value="10" class="option">10</option>
									<option value="11" class="option">11</option>
									<option value="12" class="option">12</option>
									<option value="13" class="option">13</option>
									<option value="14" class="option">14</option>
									<option value="15" class="option">15</option>
									<option value="16" class="option">16</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    	
	                    </div>	
	                		</div>
	                		<div class="col-md-8">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Colegio en el Cual estudia <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="colegioherma" id="colegioherma" type="text" class="form-control" >
	                    	</div>
	                    </div>
	                		</div>
	                	</div>


	                	<h4>Hermano número 2</h4>
	                	
	                    	     
	                    <div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Nombres <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="nombrehermad" id='nombrehermad' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Apellido <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="apellidohermad" id='apellidohermad' type="text" class="form-control" >
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-4">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Edad: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="edadhermad" id="edadhermad" class="form-control">
	                    			<option value="1" class="option">1</option>
	                    			<option value="2" class="option">2</option>
	                    			<option value="3" class="option">3</option>
	                    			<option value="4" class="option">4</option>
									<option value="5" class="option">5</option>
									<option value="6" class="option">6</option>
									<option value="7" class="option">7</option>
									<option value="8" class="option">8</option>
									<option value="9" class="option">9</option>
									<option value="10" class="option">10</option>
									<option value="11" class="option">11</option>
									<option value="12" class="option">12</option>
									<option value="13" class="option">13</option>
									<option value="14" class="option">14</option>
									<option value="15" class="option">15</option>
									<option value="16" class="option">16</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    	
	                    </div>	
	                		</div>
	                		<div class="col-md-8">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Colegio en el Cual estudia <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="colegiohermad" id="colegiohermad" type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>
	                    	
	                	<h4>Hermano número 3</h4>
	                	
	                    	     
	                    <div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Nombres <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="nombrehermat" id='nombrehermat'>
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Apellido <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="apellidohermat" id='apellidohermat' type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-4">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Edad: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="edadhermat" id="edadhermat" class="form-control">
	                    			<option value="1" class="option">1</option>
	                    			<option value="2" class="option">2</option>
	                    			<option value="3" class="option">3</option>
	                    			<option value="4" class="option">4</option>
									<option value="5" class="option">5</option>
									<option value="6" class="option">6</option>
									<option value="7" class="option">7</option>
									<option value="8" class="option">8</option>
									<option value="9" class="option">9</option>
									<option value="10" class="option">10</option>
									<option value="11" class="option">11</option>
									<option value="12" class="option">12</option>
									<option value="13" class="option">13</option>
									<option value="14" class="option">14</option>
									<option value="15" class="option">15</option>
									<option value="16" class="option">16</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    	
	                    </div>	
	                		</div>
	                		<div class="col-md-8">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Colegio en el Cual estudia <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="colegiohermat" id="colegiohermat" type="text" class="form-control" placeholder="Ex. abc 12345 or abc 1234L">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>
	                    		                	<h4>Hermano número 4</h4>
	                	
	                    	     
	                    <div class="row mb-4">
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Nombres <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="nombrehermac" id='nombrehermac'>
	                    	</div>
	                    </div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Apellido <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input  name="apellidohermac" id='apellidohermac' type="text" class="form-control" placeholder="Ex. abc 12345 or abc 1234L">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>

	                	<div class="row mb-4">
	                		<div class="col-md-4">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Edad: <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="edadhermac" id="edadhermac" class="form-control">
	                    			<option value="1" class="option">1</option>
	                    			<option value="2" class="option">2</option>
	                    			<option value="3" class="option">3</option>
	                    			<option value="4" class="option">4</option>
									<option value="5" class="option">5</option>
									<option value="6" class="option">6</option>
									<option value="7" class="option">7</option>
									<option value="8" class="option">8</option>
									<option value="9" class="option">9</option>
									<option value="10" class="option">10</option>
									<option value="11" class="option">11</option>
									<option value="12" class="option">12</option>
									<option value="13" class="option">13</option>
									<option value="14" class="option">14</option>
									<option value="15" class="option">15</option>
									<option value="16" class="option">16</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    	
	                    </div>	
	                		</div>
	                		<div class="col-md-8">
	                			<div class="form-row">
	                    	<label data-tooltip="Campo Requerido" for="">
	                    		Colegio en el Cual estudia <i class="far fa-question-circle"></i>
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="colegiohermac" id="colegiohermac" type="text" class="form-control">
	                    	</div>
	                    </div>
	                		</div>
	                	</div>
	                    	

	                    	</section>
	                    


	                    	<!-- SECTION 8 -->


	                <h4></h4>
	                <section>

	                	

	                	<h3>
	                		Los padres se han enterado del reglamento del Colegio al presentar esta solicitud. 
	                	</h3>
	                	
	                    	 <div class="form-row" style="margin-bottom: 50px;">
	                    	
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="terminos" id='terminos' value="SI" checked> SI<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="terminos" id='terminos' value="NO"> NO<br>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="invalid-feedback inv-sign-terminos">
          						Selecciona una de las 2 opciones (Campo obligatorio).</div>
								<p>
									(El recibo de la presente solicitud no implica compromiso de ninguna clase, ni de parte del solicitante, ni de la institución.)
								</p>
	                    	</div>
	                    </div>
	                    	
	                    	</section>

<h4></h4>
	                    		                <section>

	                	

	                	<h3>
	                		ACEPTACIÓN DE TRATAMIENTO DE DATOS 
	                	</h3>
	                	
	                    	 <div class="form-row" style="margin-bottom: 50px;">
	                    	<div class="invalid-feedback inv-sign-legal">
          						<b>
          							*Acepte el tratamiento de datos para enviar la solicitud.
          						</b></div>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" value="SI" id="legal" name="legal"> 
										Autorizo al COLEGIO REFOUS, con domicilio en el Km 4.7 Vía Siberia - Cota, Vereda Rozo y con números de contacto (57) (1) 518 5566 a: recolectar, almacenar, usar, circular y/o suprimir mis datos personales y los de: el menor de edad que represento legalmente, (en adelante el "Tratamiento"), de conformidad con las siguientes finalidades:
										<span class="checkmark"></span>
									</label>
								</div>
								
	                    	</div>



	                    	<div class="form-holder">
	                    		<div class="legal-box">
                                                <ol>
                                                    <li>
                                                        <h6>Finalidades del Tratamiento de los Datos Personales del representante legal del menor:</h6>
                                                        <ul>
                                                            <li>Envío de comunicaciones y contacto con el fin de brindar información sobre el prroceso de admisión, llamado a entrevistas y solicitar información adicional necesaria para evaluar su solicitud.</li>
                                                            <li>Comunicar decisiones sobre el proceso de admisión</li>
                                                            <li>Hacer seguimiento al proceso de los candidatos.</li>
                                                            <li>Citación a entrevistas</li>
                                                            <li>Conocer y verificar aplicaciones presentadas y resultado de las mismas.</li>
                                                            <li>Identificar al personal que acceda a las instalaciones del COLEGIO REFOUS.</li>
                                                            <li>Hacer uso de diversos medios de video vigilancia ("CCTV") en diferentes lugares de las instalaciones del COLEGIO REFOUS.</li>
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <h6>Finalidades del Tratamiento de los Datos Personales del menor de edad:</h6>
                                                        <ul>
                                                            <li>Conocer y verificar las aplicaciones presentadas y el resultado de las mismas.</li>
                                                            <li>Analizar la respectiva admisión al COLEGIO REFOUS y el seguimiento académico que debe tener en caso de ser admitido.</li>
                                                            <li>Definir si la admisión al COLEGIO REFOUS garantiza un adecuado proceso académico y su bienestar.</li>
                                                            <li>Identificar al personal que acceda a las instalaciones del COLEGIO REFOUS.</li>
                                                            <li>Hacer uso de diversos medios de video vigilacia en diferentes lugares de las instalaciones del COLEGIO REFOUS.</li>
                                                        </ul>
                                                    </li>
                                                </ol>
                                                <p>Declaro que tengo conocimiento que el COLEGIO REFOUS hace videovigilancia y que esta información es considerada por la regulación colombiana de protección de datos como datos de naturaleza sensible. La información recolectada a través del CCTV se utilizará para fines de seguridad de las personas, los bienes e instalaciones del COLEGIO REFOUS. Esta información puede ser empleada como prueba en cualquier tipo de proceso ante cualquier tipo de autoridad y organización.</p>
                                                <p>Así mismo, declaro que la autorización para el tratamiento de los datos sensibles arriba mencionados es facultativa y puede ser revocada en cualquier momento, salvo si existe una obligación legal que le permita al COLEGIO REFOUS acceder y conservar la información.</p>
                                                <p>Adicionalmente, manifiesto que conozco que me asisten los siguientes derechos:</p>
                                                <ol>
                                                    <li>Conocer, actualizar y rectificar los datos personales cuando identifique que hay datos aprciales, inexactos, incompletos, fraccionados, que induzcan a error</li>
                                                    <li>Solicitar prueba de la autorización otorgada al COLEGIO REFOUS.</li>
                                                    <li>Ser informado del uso que le es dado a sus datos personales.</li>
                                                    <li>Presentar ante la Superintendencia de Industria y Comercio quejas por la infracción a las normas de protección de datos establecidas en la Ley 1581 de 2012, y las normas que la modifiquen, adicionen o complementen.</li>
                                                    <li>Revocar la autorización otorgada y/o solicitar la supresión de su datos personales de la base de datos a la cual haya dado autorización, cuando no se respeten los principios, derechos, garantías constitucionales y legales en relación con el tratamiento de sus datos personales.</li>
                                                    <li>Acceder en forma gratuita a sus datos personales.</li>
                                                </ol>
                                                <p>Declaro que tengo conocimiento que el COLEGIO REFOUS ha implementado la Política de Tratamiento de Datos Personales, y que dicha Política está disponible en las instalaciones del COLEGIO REFOUS para su consulta. </p>
                                            </div>
	                    	</div>
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
    <input name="fechasolicita" id='fechasolicita' type="hidden" value='<?php echo $fechaComHoy;?>'>
    <input type="hidden" name="padecimientocan" id="padecimientocan" value="">
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
     <input name="responseUrl" id="responseUrl" type="hidden" value="https://127.0.0.1/refous-colegio/respuesta.php">
    <!-- //responseUrl Url pagina de respuesta   -->
     <input name="consecutivoFor" id="consecutivoFor" type="hidden" value="<?php echo $consecutivoA;?>">
     </section>

<h4></h4>


<section>
	<div class="d-none" id="success-message">
            			<div class="row">
            				<div class="row">
            					<div class="col-md-12">
            						<h4 >Admision N° <?php echo $consecutivoA; ?> <span id="admisionNumber"></span> Guardada! <br>
            						último paso - realizado el pago seguro en PayuLatam</h4>

            						 <p  class="text-warning font-weight-bold">Nota Importante: Para Crear la admisión exitosamente debes regresar a nuestro sitio Web, una vez hayas terminado el proceso de pago en Payu latam <br> Dandole click al link: </p>

	                				<img src="images/gobackTohome.jpg">
									<br>
            					</div>	
            				</div>
            			</div>
            		</div>
<div class="d-block" id="last-Step-submitform">
	


<h3>
	                		REALIZAR EL PAGO POR MEDIO DE LA PLATAFORMA PAYULATAM 
	                	</h3>
	                	<div class="row">
	                		<div class="col-md-12">
	                			<h4 class="text-lowercase"> <b>Listo!</b> Hemos recogido todos los datos necesarios para Diligenciar la admision, pero primero que todo debes pagar por medio de la plataforma de pago Payu Latam.</h4>

	                			<p  class="text-warning font-weight-bold">Nota Importante: Para Crear la admisión exitosamente debes regresar a nuestro sitio Web, una vez hayas terminado el proceso de pago en Payu latam <br> Dandole click al link: </p>

	                			<img src="images/gobackTohome.jpg">
								<br>
	                			<p  class="text-warning font-weight-bold">En Caso contrario no se guardará en nuestra base de datos.</p>

	                		</div>
	                	</div>
	                
</div>    	


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