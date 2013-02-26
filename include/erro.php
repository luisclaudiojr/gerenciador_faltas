<?php $erro = $_GET['erro'] ?>

<!DOCTYPE html>
<html>

	<?php include "head.php"; ?>

	<style>

		#loading {
			background: #D57E7E;
			position: fixed;
			top:0;
			bottom:0;
			left: 0;
			right: 0;
			z-index: 100;
			color:white;
			text-align:center;
			padding:0;
			width:100%;
			height:100%;
		}
		
		h1 {
			top:30%;
			position:relative;
			display:block;
		}

	</style>


<body>
	<div id="loading"><h1>Alguma Coisa Deu errada <br /> <?php echo $erro ?> </h1></div>
</body>

	<?php include "javascript.php"; ?>

</html>