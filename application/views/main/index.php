<!DOCTYPE html>
<html>
<head>
	<title>Bienvenidos</title>
	<?php $this->load->view("parts/universalInclude.php") ?>
	<!-- estilos -->

	<!-- scripts -->
</head>

<body>
	<div class="row marginNull">
		<div class="row marginNull headerPerfil">
			<div class="col-lg-4">
				<a href=<?php echo site_url("ProfileController/edit/") ?> title="Ir a perfil">
					<img src=<?php echo base_url("resources/img/generales/no-image.png") ?>>
				</a>
				<h3><?php echo $usuario->nombres." ".$usuario->apeliidos ?></h3>
			</div>
			<div class="col-lg-8">
				<a href=<?php echo site_url("welcome/logoff") ?>>
					cerrar sesion
				</a>
			</div>
		</div>
	</div>
</body>
</html>