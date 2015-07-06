<?php 
	if($profilePicUrl != ""){
		$srcImg = $profilePicUrl;	
	}else{
		$srcImg = base_url("resources/img/generales/no-image.png");
	}	
	
?>
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
		
		<label>Nombre</label>	
		<input class="form-control" name="txtNombre" value=<?php echo $usuario->nombres ?> >
		<label>Apellido</label>	
		<input class="form-control" name="txtApellido" value=<?php echo $usuario->apeliidos ?>>
		<button class="btn">Actualizar</button>
		<button class="btn"> Regresar</button>
	</form>
</body>
</html>