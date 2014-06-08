<!-- <div class = "header_content"> </div> -->

<div class= "contenedor">

	<div class="flexslider">
	  <ul class="slides">
		<li>
		  <?php echo $this->Html->image('slide1.jpg'); ?>
		</li>
		<li>
		  <?php echo $this->Html->image('slide1.jpg'); ?>
		</li>
		<li>
		  <?php echo $this->Html->image('slide1.jpg'); ?>
		</li>
		<li>
		  <?php echo $this->Html->image('slide1.jpg'); ?>
		</li>
	  </ul>
	</div>
</div>

<div class = "carousel_wrap">
	<?php echo $this->element('carousel'); ?>
</div>

<div class = "cuerpo">
	<div class = "izquierda">
		<div class = "titulo">
			Academia Spring
		</div>
		<div class = "texto">
			<?php echo $this->Html->image('slide1.jpg', array('width' => '200px')); ?>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor tortor ante, sit amet cursus dui rhoncus sit amet. In accumsan odio augue. Curabitur quis est faucibus, consectetur ligula sed, ullamcorper nulla. Nulla at justo in metus ultrices convallis sit amet vel turpis. Mauris suscipit non metus sed varius. Ut nisi lorem, adipiscing sed arcu id, bibendum ullamcorper velit. Nunc lacinia suscipit augue, ultricies suscipit felis euismod in. Morbi et justo placerat, elementum ipsum sodales, convallis dolor.
			</p>
		</div>
	</div>
	<div class = "centro">
		<div class = "titulo">
			Videos
		</div>
		<div class= "texto">
			<iframe width="250" height="auto"
				src="http://www.youtube.com/embed/XGSy3_Czz8k">
			</iframe>
			<br>
			<br>
			<iframe width="250" height="auto"
				src="http://www.youtube.com/embed/XGSy3_Czz8k">
			</iframe>
		</div>
		<div class = "titulo">
			Informacion
		</div>
		<div class= "texto">
			<?php echo $this->Html->image('soy_prospecto.png', array('width'=>'300px')); ?>
		</div>
	</div>
	<div class = "derecha">
		<div class = "titulo">
			Noticias
		</div>
		<?php for ($i= 1; $i<4; $i++){ ?>
		<div class = "noticia_home texto">
			<div class = "foto">
				<?php echo $this->Html->image('slide1.jpg', array('width'=>'90px')); ?>
			</div>
			<div class = "encabezado">
				Firma de pepito machungueto
			</div>
			<div class = "noticia_contenido_home">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor tortor ante, sit amet cursus dui rhoncus sit amet.
				In accumsan odio augue.
			</div>
		</div>
		<?php } ?>
		
	</div>	
</div>

<script>

	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide"
	  });
	});

</script>