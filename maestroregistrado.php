<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php echo view('header'); ?>
	<title>MaestroRegistrado</title>
</head>
<body>
	<div class="container">
		<div class=" row justify-content-md-center">
			<div class="alert alert-succes" role ="alert">
				<p> El maestro es registrado correctamente, su id es: <?php echo $idmaestro; ?></p>
			</div>
		</div>
	</div>
</body>
<?php echo view('footer'); ?>
</html>