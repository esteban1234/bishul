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

<article class="slide"></article>

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
	  <p class="btnser"><a class="pulse" href="">VER MAS SERVICIOS</a></p>
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

<span class="ir-arriba icon-chevron-up"></span>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/active.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/iconoarriba.js"></script>

</body>
</html>