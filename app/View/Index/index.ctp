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

<script>

	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide"
	  });
	});

</script>