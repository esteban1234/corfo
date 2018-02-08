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
				
				<button type="submit" class="btn btn-primary">VER UBICACION</button>
			</div>
		</div>
	</section>


<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/modal.js"></script>
</body>
</html>
