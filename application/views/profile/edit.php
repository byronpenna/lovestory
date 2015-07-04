<!DOCTYPE html>
<html>
<head>
	<title>Editar configuracion perfil</title>
	<?php $this->load->view("parts/universalInclude.php") ?>
	<!-- estilos -->

	<!-- scripts -->
</head>
<body>
	<form class="frm" method="post" action=<?php echo site_url("ProfileController/update") ?> enctype="multipart/form-data">
		<img src=<?php echo base_url("resources/img/generales/no-image.png") ?> >
		<input type="file" name='flProfilePic'>
		<label>Nombre</label>	
		<input class="form-control" name="txtNombre">
		<label>Apellido</label>	
		<input class="form-control" name="txtApellido">
		<button class="btn">Actualizar</button>
		<button class="btn"> Regresar</button>
	</form>
</body>
</html>