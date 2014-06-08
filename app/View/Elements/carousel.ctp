<div id = "carousel" class= "flexslider home_fixed">
  <ul class="slides">	
	<?php foreach($prospectos_elegibles as $p){ ?>
	<li>
		<div class= "carousel_content">
			<div class= "carousel_image">
				<?php echo $this->Html->image($p['Prospecto']['foto_perfil']); ?>
			</div>
			<div class= "titulo">
					<?php echo $this->Html->link($p['Prospecto']['nombre']. ' '. $p['Prospecto']['apellido'], array('controller' => 'index', 'action' => 'ver_prospecto', $p['Prospecto']['id'])); ?>
			</div>
			<div class= "subtitulo">
				<?php echo $this->Spring->stringcut($p['Prospecto']['posicion'], 10); ?>
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