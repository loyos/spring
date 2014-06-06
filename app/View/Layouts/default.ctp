<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Spring Training Center';
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('flexslider');
		echo $this->Html->css('style');
		echo $this->Html->css('jquery.fancybox');
		echo $this->Html->css('jquery.fancybox-buttons');
		echo $this->Html->css('jquery.fancybox-thumbs');
		// echo $this->Html->css('demo');
		echo $this->Html->script('jquery-1.11.0.min');
		echo $this->Html->script('jquery.cycle2.min');
		echo $this->Html->script('jquery.flexslider');
		echo $this->Html->script('jquery.fancybox.pack');
		echo $this->Html->script('jquery.fancybox');
		echo $this->Html->script('jquery.fancybox-buttons');
		echo $this->Html->script('jquery.fancybox-media');
		echo $this->Html->script('jquery.fancybox-thumbs');
		echo $this->Html->script('jquery.mousewheel-3.0.6.pack');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php
				echo $this->element('menu');
			?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); 
			 echo $this->fetch('content');?>
		</div>
		<div id="footer">
			<div class = "superior">
				<div class = "bloque_footer">
					
				</div>
				<div class = "bloque_footer">
					
				</div>
				<div class = "bloque_footer">
					<h3> Contáctenos </h3>
					
						<p>
							Av. El Limón Complejo deportivo el Ceniap, al lado de la villa Olimpica David Concepcion. Edo. Aragua, Maracay, Venezuela.
							Email: contacto@academiacarlosguillen.com
							Telefonos: (0243)556.05.24
						</p>
				</div>
			</div>
			
			<div class = "inferior">
				
			</div>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
