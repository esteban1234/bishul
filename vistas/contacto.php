
<?php include 'encabezado2.php' ?>

<body>

<?php include 'menu2.php' ?>

	<article class="titcontacto">
		<article class="tituloapartado">
			Contacto
		</article>

		<article class="submenu">
			<li><a href="../index.php">INICIO &nbsp;/</a></li>
			<li class="cambio">CONTACTO</li>
		</article>
	</article>

	<article class="bannercontacto">
		<p class="textobanner">Estamos para ayudarte en tus eventos, cotiza con nosotros. LLena este pequeño formulario con tus datos solicitando tu propuesta y un asesor especializado con gusto se pondra en contacto con usted.</p>

	<div class="contenedorform">
	<p class="tituloform">Formulario de contacto</p>
		<!-- <div class=""> -->
		<br>
				<form action="envia.php" method="post">

				<div class="form-group">
					<label for="nombre">Nombre Completo:</label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
				</div>

				<div class="form-group">
					<label for="dirección">Dirección:</label>
					<input type="text" class="form-control" id="dirección" name="direccion" placeholder="Ejemplo: Calle 28 #1233 por 56 y 58 Col. Santa Mónica, México, México">
				</div>

				<div class="form-group">
					<label for="telefono">Teléfono:</label>
					<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
				</div>

				<div class="form-group">
					<label for="correo">Correo:</label>
					<input type="text" class="form-control" id="correo" name="correo" placeholder="Ejemplo: esteban@hotmail.com">
				</div>

				<div class="form-group">
					<label for="option">Elige una opción para el servicio:</label>
					<select class="form-control" name="servicio" id="option">
						<option value="">XV años</option>
						<option value="">Boda</option>
						<option value="">Graduación</option>
						<option value="">Bautizo</option>
						<option value="">Primera comunión</option>
						<option value="">Servicios generales</option>
					</select>
				</div>

				<div class="form-group">
					<label for="mensaje">Mensaje:</label>
					<textarea class="form-control" name="mensaje" id="mensaje" cols="30" placeholder="Escribe tu comentario" rows="10"></textarea>
				</div>

				<button class="btn btn-primary">Enviar</button>
			</form>
		<!-- </div> -->
	</div>

	<div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.444956707264!2d-99.20640418564471!3d19.436373486882157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021b845dffd9%3A0x363c7db7ae4c8c93!2sAvenida+Homero+1425%2C+Polanco%2C+Polanco+II+Secc%2C+11550+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1484938612752" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		<article class="contienedatos">
			<article class="direccion">
				<span class="icon-location"></span><p class="direc">Av Homero entre socrates y sofocles, Num ext 1425, Num int 105, Col. Polanco, Miguel Hidalgo, México.</p>
			</article>
			<article class="direccion">
				<span class="icon-mail"></span><p class="correo">pendiente</p>
			</article>
			<article class="direccion">
				<span class="icon-phone"></span><p class="correo">pendiente</p>
			</article>
			<article class="direccion">
				<span class="icon-clock"></span><p class="correo">Lunes a Viernes de 9am a 6pm </p>
			</article>
		</article>
	</div>
	</article>




		<?php include 'pie.php' ?>

<span class="ir-arriba icon-chevron-up"></span>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/active.js"></script>
<script src="../js/lightbox.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>


</body>
</html>
