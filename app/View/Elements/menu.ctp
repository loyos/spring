<div class = "menu">
	<ul>
		<li>
			<?php echo $this->Html->link('Home',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link('Información',array('controller' => 'pages', 'action' => 'quienes_somos')); ?>
			<ul>
				<li>
					<?php echo $this->Html->link('Quiénes Somos?',array('controller' => 'pages', 'action' => 'quienes_somos')); ?>
				</li>
				<li>
					<?php echo $this->Html->link('La Academia',array('controller' => 'pages', 'action' => 'la_academia')); ?>
				</li>
				<li>
					<?php echo $this->Html->link('Staff',array('controller' => 'pages', 'action' => 'staff')); ?>
				</li>
			</ul>
		</li>
		<li>
			<?php echo $this->Html->link('Prospectos',array('controller' => 'index', 'action' => 'prospectos', 'elegibles')); ?>
			<ul>
				<li>
					<?php echo $this->Html->link('Elegibles',array('controller' => 'index', 'action' => 'prospectos', 'elegibles')); ?>
				</li>
				<li>
					<?php echo $this->Html->link('Firmados',array('controller' => 'index', 'action' => 'prospectos', 'firmados')); ?>
				</li>
			</ul>
		</li>
		<li>
			<?php echo $this->Html->link('Staff',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link('Noticias',array('controller' => 'index', 'action' => 'noticias')); ?>
		</li>
		<li>
			<?php echo $this->Html->link('Contacto',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
	</ul>
</div>

<?php
 //debug($menu); 
?>
