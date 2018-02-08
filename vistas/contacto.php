<?php include 'encabezado2.php' ?>

<body>

	<figure class="logo">
		<img src="../img/corfo.png" alt="Corfo" class="img-responsive">
	</figure>

	<div class="menu">
		<nav>
			<ul>
				<a class="select" href="../index.php">INICIO</a>
				<a class="select" href="nosotros.php">NOSOTROS</a>
				<a class="select" href="servicios.php">SERVICIOS</a>
				<a class="select" id="selector" href="contacto.php">CONTACTO</a>
			</ul>
		</nav>
	</div>

	<div class="banner4">
		<div class="fondo4">
			<p><i class="fas fa-phone-volume"></i> CONTACTO</p>
		</div>
	</div>


    <section class="container">
    	<h3 class="tit">Para CORFO es muy importante mantener un rápido contacto con nuestros clientes. Si estas interesado en recibir información detallada, una cotización o solicitar servicio no dudes en ponerte en contacto con nosotros.</h3>
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Formulario de contacto</h3>
				
				<div class="form-group col-lg-12">
					<label>Nombre completo</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Teléfono</label>
					<input type="password" name="" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Correo</label>
					<input type="email" name="" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-12">
					<label>Comentario</label>
					<textarea  class="form-control" name="comentario" placeholder="Escribenos tu mensaje" required/></textarea>
				</div>
				
							
			
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Datos de la empresa</h3>
				<p>
					<b>Dirección:</b> C. 5D #302-E ENTRE C. 20-A, COL. X-CUMPICH, MERIDA, YUCATAN. C.P. 97204
				</p> <br>
				<p>
					<b>Correo:</b> info@vigilanciacorfo.com
				</p> <br>
				<p>
					<b>Teléfono:</b> PENDIENTE
				</p> <br>
				<p>
					<b>Horario:</b> Lunes a Viernes de 9 am a 6 pm
				</p> <br>
				
				<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#miventana">VER UBICACION</button>
			</div>
		</div>
	</section>

	<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>VIGILANCIA, MANTENIMIENTO Y LIMPIEZA ESPECIALIZADA CORFO SA DE CV</h4>
				</div>
				<div class="modal-body">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.95410513882!2d-89.63659818572283!3d21.034522292958854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56742fe2e0098b%3A0xc63b4e8da4c4122b!2sCalle+5+302%2C+Xcumpich%2C+97204+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses!2smx!4v1518121043064" width="575" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>


<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>
