<div class = "page_info">
	<div class = "ver_noticia">
		<div class = "titulo">
			<?php echo $noticia['Noticia']['titulo']; ?>
		</div>
		<div class = "foto">
			<?php echo $this->Html->image($noticia['Noticia']['foto']); ?>
		</div>
		<div class = "contenido">
			<p>
				<?php echo $noticia['Noticia']['contenido']; ?>
			</p>
		</div>
	</div>
</div>