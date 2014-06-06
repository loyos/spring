<div class = "page_info">
	<h2> Prospectos</h2>
	
	
	<?php foreach ($prospecto as $p){ ?>
	<div class = "prospecto">
		<div class = "foto">
			<?php
				if(!empty($p['Prospecto']['foto_perfil'])){
					echo $this->Html->image($p['Prospecto']['foto_perfil'], array('width' => '150px', 'height' => '150px'));
				}else{
					echo $this->Html->image('bc.jpg', array('width' => '150px', 'height' => '150px'));
				}
			?>
		</div>
		<div class = "nombre">
			<b> Nombre: </b> <?php echo $p['Prospecto']['nombre']; ?>
		</div>
		<div class = "info">
			<b> Batea: </b> <?php echo $p['Prospecto']['batea']; ?> <br> 
			<b> Lanza: </b> <?php echo $p['Prospecto']['lanza']; ?> 
		</div>
		
		<div class = 'boton'>
			<!-- <a class="fancybox link_prospecto" href="#ver_prospecto" title="" data-id = "<?php //  echo $p['Prospecto']['id']; ?>">Ver prospecto</a> -->
			<?php echo $this->Html->link('Ver Prospecto', array('action' => 'ver_prospecto', $p['Prospecto']['id'])); ?>
		</div>
	</div>
	
	<?php } ?>
	
	<!-- <div id = "ver_prospecto" style = 'width:800px; height: 600px; display: none;'>
		<div class = 'perfil_full'>
			<div class = 'foto_perfil'>
			</div>
			<div class = 'info'>
			</div>
		</div>
		<div class = "galeria">
		</div>
	</div> --> 	<!--
					esto es una prueba fallida de colocar un div con todo el perfil de un jugador
					en un fancybox	
				-->
		
	<div class = "chiclet">
	
	</div>
</div>

<script>
	
	// function vaciardiv(){ esta funcion es para vaciar el contenido del div ver_prospecto
		// $( "#ver_prospecto .perfil_full .foto_perfil" ).empty();
		// $( "#ver_prospecto .perfil_full .info" ).empty();
		// $( "#ver_prospecto .perfil_full .video_1" ).empty();
		// $( "#ver_prospecto .perfil_full .video_2" ).empty();
	// }
	
/*	$( ".link_prospecto" ).click(function() { // un ejemplo limpio de ajax que finalmente no use jejeje.
		vaciardiv();
		id_prospecto = $(this).attr('data-id');
		
		$.ajax({
			type: "POST",
			url: "/spring/index/prospectos_ajax.json",
			data: { id: id_prospecto},
		dataType: "json"
	}).done(function( msg ) {
	
		// console.debug(msg[0].Prospecto.nombre); // para mostrar 
			$('#ver_prospecto .perfil_full .foto_perfil').html('<img src = "../../img/'+msg[0].Prospecto.foto_perfil+'">');
			$('#ver_prospecto .perfil_full .info').html(
				 '<b>' + msg[0].Prospecto.nombre + '  ' + msg[0].Prospecto.apellido + '</b><br>' +
				 '<b>W</b>: ' + msg[0].Prospecto.w + '<b> / H: </b>' + msg[0].Prospecto.h + '<br>' + 
				 '<b>Batea</b>: ' + msg[0].Prospecto.batea + '<b> / Lanza: </b>' + msg[0].Prospecto.lanza + '<br>' +
				 '<b>Lugar de Nacimiento</b>: ' + msg[0].Prospecto.lugar_nacimiento + '<br>' +
				 '<b> Fecha de Nacimiento: </b>' + msg[0].Prospecto.fecha_nacimiento + '<br>' +
				 '<b> Jugador favorito : </b>' + msg[0].Prospecto.jugador_favorito + '<br>' +
				 '<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Youtube</a>'
			);
	});
	}); */
	
/*	$(document).ready(function() {   // con esto evitamos que el al clickear el hipervinculo, la pagina vuelva al tope.
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
*/
	

</script>