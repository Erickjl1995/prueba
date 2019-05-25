<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if(!$this->session->userdata('id_usuario'))
	redirect('login');
	else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="<?= base_url()?>asset/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url()?>asset/css/estilo.css">
	<title>Inicio de Session</title>
</head>
<body>
<div class="conenedor">
	<h4 class="nombre"><b>MARINA</b>CIENFUEGOS</h4>
	<div class="col-md-1"></div>	
	<div class="col-md-6" id="panel1">
		<div class="text">
		   <p class="text1">	
		   		Bienvenidos,<br>
		 	 	Soy marina,<br>
				Tu nutricionista,<br></p>
			<br>
			<p class="nutrición">Una buena nutrición es parte de tener una vida<br>
			plena, es amar y cuidar de nuestro cuerpo de la<br>
			forma mas adecuada para cada uno de nosotros</p>
		</div>
		<div class="c_blanco">
			<table class="tabla1">
				<tr>
					<td class="td_t1" rowspan="2">
						<img class="img_tabla1" src="<?=base_url()?>asset/img/rueda.png">
					</td>
					<td>
						<h4>Dietas Realizadas</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla1">Creare una dieta deacuerdo a tu <br>
						estilo de vida y gustos de palabra</p>
					</td>
				</tr>
			</table>

			<table class="tabla1">
				<tr>
					<td class="td_t1" rowspan="2">
						<img class="img_tabla1" src="<?=base_url()?>asset/img/ventana.png">
					</td>
					<td>
						<h4>Estudio nutricional</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla1">Basamos tus metas y dietas en el<br>
						estatus de Salud Personal,monitoreo<br>
					    de niveles de grasa y musculatura</p>
					</td>
				</tr>
			</table>

			<table class="tabla1">
				<tr>
					<td class="td_t1" rowspan="2">
						<img class="img_tabla1" src="<?=base_url()?>asset/img/balanza.png">
					</td>
					<td>
						<h4>Completa tu dieta</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla1">Servicio reductivo, terapias <br>
 							relajantes y fáciales de uñtra sonido <br>
 							 para completar tu programa<p>
					</td>
				</tr>
			</table>
		</div>
	</div>	
	<div class="menu">
		<br>
		<ul class="nav">
			<li>Inicio</li>
			<li>Conoce Mas</li>
			<li>Proyectos</li>
			<li>Blog</li>
		</ul>
	</div>
	
	<div class="col-md-8" id="panel2">
				<h3>Un programa de Nutrición de <br>acuerdo a tu estilo de vida</h3>

				<table class="tabla2">
					<tr>
						<td style="width: 100px;"><hr/></td>
						<td> <img class="img_tabla2" src="<?=base_url()?>asset/img/manzanita2.png"></td>
						<td style="width: 100px;"><hr/></td>
					</tr>
				</table>

				<p style="font-size: 13px;">Para cumplir tu plan de nutrición puedes hacer uso de nuestros<br>
				 servicios dedicados al cuido de tu cuerpo</p>
	</div>
	<div class="col-md-2" id="panel3">
		    <div class="img_center">
		          <img class="img_tabla2" src="<?=base_url()?>asset/img/pera.png">
		     </div>
		     <div class="text_p3">
		     	<p class="t_p3"><b>Personaliza tu dieta</b></p>
		     	<p class="t_p5">Una dieta que se acomoda a tu <br>
		     	estilo de vida</p>
		     </div>
		     <div class="img_down3">    	 
		     	 <p class="text_down">CONTACTANOS</p>
		     </div>
	</div>

	<div class="col-md-2" id="panel4">
		    <div class="img_center">
		          <img class="img_tabla2" src="<?=base_url()?>asset/img/ajo1.png">
		     </div>
		     <div class="text_p3">
		     	<p class="t_p5"><b>Servicio reductivo</b></p>
		     	<p class="t_p3">Modelo y reducción a traves de<br>
		     	Maquinas de ultracativación</p>
		     </div>
		     <div class="img_down">    	 
		     	 <p class="text_down">CONTACTANOS</p>
		     </div>
	</div>

		<div class="col-md-2" id="panel5">
		    <div class="img_center">
		          <img class="img_tabla2" src="<?=base_url()?>asset/img/berenjena.png">
		     </div>
		     <div class="text_p3">
		     	<p class="t_p5"><b>Terapias de <br>Realjación de piernas</b></p>
		     	<p class="t_p3">Botas de comprención para <br>
		     	 estimular la circulación y disminuir<br>
		     	 el cansancio por exceso de<br>
		     	  ejercicio</p>
		     </div>
		    <div class="img_down5">    	 
		     	 <p class="text_down">CONTACTANOS</p>
		     </div>
	</div>

		<div class="col-md-2" id="panel6">
		    <div class="img_center">
		          <img class="img_tabla2" src="<?=base_url()?>asset/img/ajo2.png">
		     </div>
		     <div class="text_p3">
		     	<p class="t_p5"><b>Personaliza tu dieta</b></p>
		     	<p class="t_p3">Una dieta que se acomoda a tu <br>
		     	estilo de vida</p>
		     </div>
		    <div class="img_down">    	 
		     	 <p class="text_down">CONTACTANOS</p>
		     </div>
	</div>

		<div class="col-md-2" id="panel6">
		    <div class="img_center">
		          <img class="img_tabla2" src="<?=base_url()?>asset/img/manzanita2.png">
		     </div>
		     <div class="text_p3">
		     	<p class="t_p5"><b>Personaliza tu dieta</b></p>
		     	<p class="t_p3">Una dieta que se acomoda a tu <br>
		     	estilo de vida</p>
		     </div>
		    <div class="img_down">    	 
		     	 <p class="text_down">CONTACTANOS</p>
		     </div>
	</div>

	<div class="banner">
		<div class="col-md-7" id="panel7">
				<h3>Lorem ipsum dolor sit amet,<br>
				 consectetur adipisicing elit</h3>

				<table class="tabla3">
					<tr>
						<td style="width: 100px;"><hr style="background-color: white" /></td>
						<td> <img class="img_tabla2" src="<?=base_url()?>asset/img/manzanita2.png"></td>
						<td style="width: 100px;"><hr style="background-color: white" /></td>
					</tr>
				</table>
				<table class="tabla3">
					<tr>
						<td></td>
						<td> <img class="img_perfil" src="<?=base_url()?>asset/img/sobrelayer2.png"></td>
						<td></td>
					</tr>
			    </table>
				<p style="font-size: 25px;">"Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
				 quis nostrud exercitation ullamco laboris nisi ut aliquip."</p>
		</div>
	</div>

	<div class="encabezado">
		<div class="col-md-7" id="panel_c">
				<p>Lorem ipsum</p>
				<h3> Lorem ipsum dolor sit amet consectetur </h3>
				<table class="tabla_c">
					<tr>
						<td style="width: 100px;"><hr/></td>
						<td> <img class="img_tabla4" src="<?=base_url()?>asset/img/cuadrodetexto.png"></td>
						<td style="width: 100px;"><hr/></td>
					</tr>
				</table>
		</div>
	</div>

	<div class="col-md-2" id="panel8">
		     <div class="text_p3" style="text-align: justify;">
		     	<p class="t_p6"><b>Como nos afecta el tener<br>
		     	 una mala alimentacion en <br> bajar de peso y tonificar</b></p>
		     	<p class="t_p7">La rutina y el estres del día a día, muchas<br>
		     	veces nos hacen que nos saltemos tiempos de<br>
		     	 comida, si tu meta es tonificar, es inportante<br> que no te saltes las comidas,
		     	para que podamos<br> absorver mejor los nutrientes. en lugar...</p>
		     </div>
		     <div class="img_mas">    	 
		     	 <p class="text_down">Leer mas</p>
		     </div>
	</div>

	<div class="col-md-2" id="panel9">
		     <div class="text_p3" style="text-align: justify;">
		     	<p class="t_p6"><b>El tomar tarde nuestras<br> cenas, comienza a<br> hacernos engordar.</b></p>
		     	<p class="t_p7">
		     		¿Quien de nosostros ha dejado de cenar tarde,<br>
		     		porque pienda que va a ganar peso, engordar, o <br> 
		     		no comer nada despues de la 6 de la tarde<br>
		     		porque te han dicho que es malo? puedo <br>
		     		decirte que antes tambien yo pensaba lo...</p>
		     </div>
		     <div class="img_mas">    	 
		     	 <p class="text_down">Leer mas</p>
		     </div>
	</div>

		<div class="col-md-2" id="panel10">
		     <div class="text_p3" style="text-align: justify;">
		     	<p class="t_p6">
		     	<b>¿Eres de las personas<br> que tiene el<br>
		     	 metabolismo lento? Realjación de piernas</b></p>
		     	<p class="t_p7"> 
		     		A medida que vamos creciendo, nuestro <br>
		     		cuerpo va trabajando mas lento, si es asi,<br>
		     	 	pero depende de nosotros el mantenernos activos<br>
		     	  	para evitare ese desgaste muscular que se va <br>
		     		dando. Si te pones a pensar muchas veces...</p>
		     </div>
		    <div class="img_mas10">    	 
		     	 <p class="text_down">Leer mas</p>
		     </div>
	</div>

		<div class="col-md-2" id="panel11">
		     <div class="text_p3" style="text-align: justify;">
		     	<p class="t_p6">
		     		<b>¿Es posible mejorar la<br>
		     		 flacidez? Descubre <br>
		     		 como hacerlo</b></p>
		     	<p class="t_p7">
		     		 Esto nos pasa a todos, cuando perdemos de peso,<br>
		     		 Es inportante hidratarno y consumir alimentos<br>
		     		 ricos en colageno, (carnes negras, legumbres,<br>
		     		 frutas citricas) cuando empezamos a bajr de<br>
		     		 peso, tienes que combinar dieta con ejercicio
		     	</p>
		     </div>
		    <div class="img_mas11">    	 
		     	 <p class="text_down">Leer mas</p>
		     </div>
	</div>

	<div class="col-md-8" id="suscribir">
			<div class="col-md-7" id="panel2">
				<p>Lorem ipsum</p>
				<h3> Lorem ipsum dolor sit amet consectetur </h3>
			</div>

			<div class="input_suscripcion">
				<table>
					<tr>
						<td style="width: 800px;"><input type="text" id="text_sus" class="form-control" placeholder="Ingresa tu dirección de e-mail"></td>
						<td >     	 
                             <div class="img_sus"> <h4 class="text_suscrip">Suscribir</h4></div>
		                 </td>
					</tr>					
				</table>
			</div>
	</div>
	<div class="datos">
		<div class="encabezado">
			<h1 class="text_n">Encuentra una forma <br>
			saludable de comer que te<br>
			<a class="text_a">haga feliz, vivir sin culpas y<br>
			con comida que disfrutes.</a></h1>
		</div>

		<div class="datos_tabla">
			<table class="tabla_d">
				<tr>
					<td rowspan="2">
						<img class="img_tabla_d" src="<?=base_url()?>asset/img/imgpeq1.png">
					</td>
					<td>
						<h4>Grab and go!</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla_d">Paltps saludables y faciles <br>
						de rpeparar en tu día a día.</p>
					</td>
				</tr>

				<tr>
					<td rowspan="2">
						<img class="img_tabla_d" src="<?=base_url()?>asset/img/imgpeq3.png">
					</td>
					<td>
						<h4>Libertad en tu dieta</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla_d">
							Balancear tu dieta con <br>
							comidas libres es parte de<br>
							disfrutar tu nutricion</p>
					</td>
				</tr>

				<tr>
					<td rowspan="2">
						<img class="img_tabla_d" src="<?=base_url()?>asset/img/imgpeq5.png">
					</td>
					<td>
						<h4>¿Dudas? ¡WhatsApp me!</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla_d">
							Quiero apoyaste y responder <br>
							dudas que tengas acerca de tu <br>
						    nutricion</p>
					</td>
				</tr>
			</table>

			<table class="tabla_d">
				<tr>
					<td rowspan="2">
						<img class="img_tabla_d" src="<?=base_url()?>asset/img/imgpeq2.png">
					</td>
					<td>
						<h4>Basado en tu estado de<br> salud</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla_d">
							Monitoreare tu estatus de salud <br>
							para cumplir tus metas y continuar <br>
							tu plan de dieta deacuerdo a tu <br>tiempo</p>
					</td>
				</tr>

				<tr>
					<td rowspan="2">
						<img class="img_tabla_d" src="<?=base_url()?>asset/img/imgpeq4.png">
					</td>
					<td>
						<h4>Apoyo</h4>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text_tabla_d">
							Puedes completar tu programa de <br>
							nutrición con servicios dedicados<br>
							al cuido de tu cuerpo</p>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="footer">
		<div class="aside1">
			<br>
			<h2 class="enc_fo">Lorem ipsum</h2>
			<div style="width: 70px;"><hr style="background-color: #DAA520; height: 5px;"/></div>
			Loren ipsun dolor sit amet<br>
			consectetur adipisicing elit
			<hr style="height: 2px; background-color: white;" />
			Lorem ipsum dolor sit amet<br>
			consectetur adipisicing elit
			<hr style="height: 2px; background-color: white;" />
			Lorem ipsum dolor sit amet <br>
			consectetur adipisicing elit
			<hr style="height: 2px; background-color: white;" />
		</div>

		<div class="aside2">
			<br>
			<h2 class="enc_fo">Lorem ipsum</h2>
			<div style="width: 70px;"><hr style="background-color: #DAA520; height: 5px;"/></div>
			<p><img class="twitter"src="<?= base_url();?>asset/img/imgtwitter.png">
			Lorem ipsum <br> dolor sit amet, consectetur<br>
			adipisicing elit, sed do eiusmod tempor incidi-<br>
			dunt ut labore et dolore magna aliqua.</p><br>

			<p><img class="twitter"src="<?= base_url();?>asset/img/imgtwitter.png">
			Lorem ipsum <br> dolor sit amet, consectetur<br>
			adipisicing elit, sed do eiusmod tempor incidi-<br>
			dunt ut labore et dolore magna aliqua.</p>
		</div>

		<div class="aside2">
			<br>
			<h2 class="enc_fo">Lorem ipsum</h2>
			<div style="width: 70px;"><hr style="background-color: #DAA520; height: 5px;"/></div>
			<table class="table_footer">
				<tr>
					<td><img class="img_footer"src="<?= base_url();?>asset/img/img1footer.png"></td>
					<td>Lorem ipsum dolor <br> sit amet</td>
				</tr>
				<tr>
					<td><img class="img_footer2"src="<?= base_url();?>asset/img/imgfooter2.png"></td>
					<td> Lorem ipsum dolor <br> sit amet</td>
				</tr>
			</table>
		</div>

	</div>
</div>
	<script src="<?= base_url();?>asset/js/jquery.min.js"></script>
	<script src="<?= base_url();?>asset/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>asset/js/login.js"></script>
</body>
</html>
<?php 
	}; ?>