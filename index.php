<!DOCTYPE html>

<?php include 'vistas/encabezado.php' ?>


<script>
	$(window).scroll(function() {
		$('#animatedElement').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
	});
</script>


<body>

<?php include 'vistas/menu.php' ?>

<div class="container-fluid">
	<!-- <h3>TOP MUSIC</h3> -->
		<div class="row">
			<div class="col-xs-12">
					<div id="carousel-ejemplo" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-ejemplo" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="1"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="2"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="3"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="4"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="5"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="6"></li>
							<li data-target="#carousel-ejemplo" data-slide-to="7"></li>
						</ol>

						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/carousel/img-1.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola juan</h3>
										<p>es un ejemplo</p>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-2.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola ADRIAN</h3>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-3.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola ALONZO</h3>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-4.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola MIGUEL</h3>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-5.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola PEDRO</h3>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-6.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola MARGARITA</h3>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-7.jpg" alt="">
								<div class="carousel-caption">
										<h3>Hola Santiago</h3>
								</div>
							</div>

							<div class="item">
								<img src="img/carousel/img-7.jpg" alt="">
								<!-- <img class="d-block img-fluid" src="..." alt="Second slide"> -->
								<div class="carousel-caption">
										<h2>Hola Santiago</h2>
								</div>
							</div>
						</div>  <!-- CIERRA carousel-inner-->

						<a class="left carousel-control" href="#carousel-ejemplo" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-ejemplo" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
			</div> <!--CIERRA COL-XS-8-->
		</div> <!--CIERRA ROW-->
</div>

<article class="contenser">
	<h1 class="h1">SERVICIOS</h1>
	<article class="servicios">
	  	<article class="conten-precios">
		    <article class="tabla-precios">
		      	<h1 class="pricing-title">XV AÑOS</h1>
		      	<article class="contencir">
		   			<img class="img" src="img/xvaños.jpg" alt="" height="250">
		       	</article>
		        <p class="diseñado">Incluye:</p>
		        <p class="texto_tabla">Meseros (el numero de meseros depende del numero de invitados), 1 bartender, renta de mesas, sillas, amplia variedad de mantelería, vajilla, plaque, mesa de postres. Precios no incluyen IVA.</p>
		        <a href="forcontacto.php" class="boton_tabla"><p class="contratar">CONTRATAR</p></a>
		    </article>

		    <article class="tabla-precios">
		      	<h1 class="pricing-title">BODAS</h1>
		      	<article class="contencir">
		   			<img class="img" src="img/boda.jpg" alt="" height="250">
		       	</article>
		        <p class="diseñado">Incluye:</p>
		        <p class="texto_tabla">Meseros (el numero de meseros depende del numero de invitados), 2 bartenders, renta de mesas, sillas, amplia variedad de mantelería, vajilla, plaque, mesa de postres. Precios no incluyen IVA.</p>
		        <a href="forcontacto.php" class="boton_tabla"><p class="contratar">CONTRATAR</p></a>
		    </article>

		    <article class="tabla-precios">
		      	<h1 class="pricing-title">GRADUACIONES</h1>
		      	<article class="contencir">
		   			<img class="img" src="img/gradu3.jpg" alt="" height="250">
		       	</article>
		        <p class="diseñado">Incluye:</p>
		        <p class="texto_tabla">Meseros (el numero de meseros depende del numero de invitados), 3 bartenders, renta de mesas, sillas, amplia variedad de mantelería, vajilla, plaque, mesa de postres. Precios no incluyen IVA.</p>
		        <a href="forcontacto.php" class="boton_tabla"><p class="contratar">CONTRATAR</p></a>
		    </article>
	  </article>
	  <p class="btnser"><a class="pulse" href="vistas/servicios.php">VER MAS SERVICIOS</a></p>
	</article>
</article>

<article class="galeriaindex">
	<h1 class="h1 gal">GALERIA</h1>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="img/slide2.jpg" data-lightbox="galeria" data-title="Cocina Gourmet"><img src="img/slide4.jpg" class="img-thumbnail" alt=""></a>
					<div class="title titulo">Cocina Gourmet</div>
				</div>
				<div class="col-md-4">
					<a href="img/slide9c.jpg" data-lightbox="galeria" data-title="Atención integral"><img src="img/slide9c.jpg" class="img-thumbnail" alt=""></a>
					<div class="title titulo">Atención integral</div>
				</div>
				<div class="col-md-4">
					<a href="img/slide12c.jpg" data-lightbox="galeria" data-title="Bartenders"><img src="img/slide12c.jpg" class="img-thumbnail" alt=""></a>
					<div class="title titulo">Bartenders</div>
				</div>
			</div>

			<div class="row fila2">
				<div class="col-md-4">
					<a href="img/slide10.jpg" data-lightbox="galeria" data-title="Cocina para cualquier gusto"><img src="img/slide10.jpg" class="img-thumbnail" alt=""></a>
					<div class="title titulo">Cocina para cualquier gusto</div>
				</div>
				<div class="col-md-4">
					<a href="img/slide14.jpg" data-lightbox="galeria" data-title="Mobiliario"><img src="img/slide14.jpg" class="img-thumbnail" alt=""></a>
					<div class="title titulo">Mobiliario</div>
				</div>
				<div class="col-md-4">
					<a href="img/mesa.jpg" data-lightbox="galeria" data-title="Mesa de dulces"><img src="img/mesa.jpg" class="img-thumbnail" alt=""></a>
					<div class="title titulo">Mesa de dulces</div>
				</div>
			</div>
		</div>
	</section>
	<p class="btnser"><a class="pulse" href="vistas/contacto.php">CONTRATAR</a></p>

</article>

<?php include 'vistas/pie.php' ?>

<!-- <span class="ir-arriba glyphicon-chevron-up"></span> -->
<span class="ir-arriba icon-chevron-up"></span>
<script src="js/jquery.js"></script>
<script src="js/active.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/iconoarriba.js"></script>

</body>
</html>
