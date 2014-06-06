<div id = "carousel" class= "flexslider home_fixed">
  <ul class="slides">	
	<?php for ($i= 1; $i<9; $i++){ ?>
	<li>
		<div class= "carousel_content">
			<div class= "carousel_image">
				<?php echo $this->Html->image('bc.jpg'); ?>
			</div>
			<div class= "titulo">
				Jorge Agudelo
			</div>
			<div class= "subtitulo">
				Real Madrid
			</div>
		</div>
	</li>
	<?php } ?>
  </ul>		
</div>

<script>
  $('#carousel').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 300,
    itemMargin: 2,
	minItems: 3,
    maxItems: 3,
	slideshow: true,
  });

</script>