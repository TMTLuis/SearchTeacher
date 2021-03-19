<!DOCTYPE html>
<html>
<head>
	       <?php echo view('vEnlacesHead') ?>

	<title>Exito</title>
</head>
<body>
<?php echo view('vNavbar') ?>	
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="alert alert-success" role="alert">
				<p>
					El usuario se registro exitosamente, su identificador es: <?php echo $idRegistrado; ?>
				</p>				
			</div>
		</div>
	</div>

</body>
</html>