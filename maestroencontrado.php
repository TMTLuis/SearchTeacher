<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <?php echo view('header'); ?>
  	<center><img src="../../Imagenes/SearchTeacher.png"></center>
	<title>Maestro Encontrado</title>
</head>
<body>
	<div class="container">
		<h1>Registro encontrado</h1>

		<form method="POST" action="../Home/actualizarmaestro">
			<input type="hidden" class="form-control" id="idmaestro" name="idmaestro" value="<?php echo $idmaestro; ?>">
			<div>
				<label for="nombre" class="col-sm-2 col-form-label">Nombre del Maestro
				</label>
				<div>
					<input type="nombre" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="foto" class="col-sm-2 col-form-label">Foto del maestro</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="foto" name="foto" value="<?php echo $foto; ?>">					
				</div>
			</div>
			<div class="mb-3 row">
				<button type="submit" class="btn btn-primary mb-3">
					Actualizar maestro
				</button>
				<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url();?>/Home/eliminarMaestro/<?php echo $idmaestro; ?>">Eliminar</a>
			</div>
		</form>
	</div>
</body>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <br>
    <br>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <?php echo view('footer'); ?>
</html>