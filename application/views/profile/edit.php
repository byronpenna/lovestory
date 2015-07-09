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
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/perfil/editar/style.css") ?> >
	<!-- scripts -->

</head>
<body>
	<div class="col-lg-offset-4 col-lg-4 seccionEditarPerfil">
		<h2 class="text-center">Editar perfil</h2>
		<form class="frm" method="post" action=<?php echo site_url("ProfileController/update") ?> enctype="multipart/form-data">
			<label>Nombre</label>	
			<input class="form-control" name="txtNombre" value=<?php echo $usuario->nombres ?> >
			<label>Apellido</label>	
			<input class="form-control" name="txtApellido" value=<?php echo $usuario->apeliidos ?>>
			<div class="row marginNull seccionBotones">
				<button class="btn">Actualizar</button>
				<button class="btn"> Regresar</button>	
			</div>
			
		</form>	
	</div>
	
</body>
</html>