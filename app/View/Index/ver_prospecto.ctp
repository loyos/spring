<div class = "page_info">
	<div class = "titulo">
		<?php echo $prospecto['Prospecto']['nombre']. ' ' . $prospecto['Prospecto']['apellido'];?>
	</div>
	<div id = "ver_prospecto" style = 'width:900px; height: 600px;'>
		<div class = 'perfil_full'>
			<div class = 'foto_perfil'>
				<div class = "position"> 
					<?php echo $prospecto['Prospecto']['posicion']; ?>
				</div>
				<?php echo $this->Html->image($prospecto['Prospecto']['foto_perfil']); ?>
			</div>
			<div class = 'info'>
				<?php
					echo '<b> W: </b>'. $prospecto['Prospecto']['w'].' / ';
					echo '<b> H: </b>'. $prospecto['Prospecto']['h']. '<br>';
					echo '<b> Batea: </b>'. $prospecto['Prospecto']['batea'].' / ';
					echo '<b> Lanza: </b>'. $prospecto['Prospecto']['lanza']. '<br>';
					echo '<b> Lugar de Nacimiento: </b>'. $prospecto['Prospecto']['lugar_nacimiento'].'<br>';
					echo '<b> Fecha de Nacimiento: </b>'. $prospecto['Prospecto']['fecha_nacimiento']. '<br>';
					echo '<b> Jugador Favorito: </b>'. $prospecto['Prospecto']['jugador_favorito']. '<br>';
				?>
			</div>
		</div>
		<div class = "galeria">
			<div class="cycle-slideshow">
				<?php if(!empty($prospecto['Prospecto']['foto_2'])) { echo $this->Html->image($prospecto['Prospecto']['foto_perfil']); } ?>
				<?php if(!empty($prospecto['Prospecto']['foto_2'])) { echo $this->Html->image($prospecto['Prospecto']['foto_1']); } ?>
				<?php if(!empty($prospecto['Prospecto']['foto_2'])) { echo $this->Html->image($prospecto['Prospecto']['foto_2']); } ?>
			</div>
		</div>
		<div class = "videos">
			<div class = "title">Videos:</div>
			<div class = "thumbs">
			<?php
				echo $this->Html->link($this->Html->image($prospecto['Prospecto']['thumb_video1'], array('width' => '100px')), $prospecto['Prospecto']['video_1'], array('escape' => false, 'class' => 'fancybox-media')); 
				echo $this->Html->link($this->Html->image($prospecto['Prospecto']['thumb_video1'], array('width' => '100px')), $prospecto['Prospecto']['video_2'], array('escape' => false, 'class' => 'fancybox-media'));
			?>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {   // con esto evitamos que el al clickear el hipervinculo, la pagina vuelva al tope.
		$(".fancybox").fancybox({
		  padding: 10,
		  helpers: {
			overlay: {
			  locked: false,
			  showEarly : false
			}
		  }
		});
		$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
		});
	});
</script>