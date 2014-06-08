<div class = "page_info">
	<h2> Noticias</h2>
	
	
	<?php foreach ($noticias as $n){ ?>
		<div class = "noticia">
			<div class = "imagen">
				<?php echo $this->Html->image($n['Noticia']['foto']); ?>
			</div>
			<div class = "contenido">
				<div class = "titulo">
					<?php echo $n['Noticia']['titulo']; ?>
				</div>
				<p>
					<?php
						echo $this->Spring->stringcut($n['Noticia']['contenido'], 100);
					?>
				</p>
				<div class = "leer_mas">
					<?php echo $this->Html->link('Leer más', array('controller' => 'index', 'action' => 'ver_noticia', $n['Noticia']['id'])) ?>
				</div>
			</div>
		</div>
	<?php } ?>

		
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