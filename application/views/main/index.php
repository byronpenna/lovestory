<!DOCTYPE html>
<html>
<head>
	<title>Bienvenidos</title>
	<?php $this->load->view("parts/universalInclude.php") ?>
	<!-- estilos -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/main/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/main/media.css") ?> >
	<!-- scripts -->
</head>

<body>
	<div class="row marginNull">
		<div class="row marginNull headerPerfil">
			<div class="col-lg-4">
				<a href=<?php echo site_url("ProfileController/edit/") ?> title="Ir a perfil">
					<img class="imgPerfil" src=<?php echo $usuario->profilePic ?>>
				</a>
				<h3><?php echo $usuario->nombres." ".$usuario->apeliidos ?></h3>
			</div>
			<div class="col-lg-8">
				<a href=<?php echo site_url("welcome/logoff") ?>>
					cerrar sesion
				</a>
			</div>
		</div>
		<div class="row marginNull">
			<div class="col-lg-3">
				
			</div>
			<div class="col-lg-3">
				
			</div>
			<div class="col-lg-3">
				<div class="row marginNull divBusquedaAmigos">
					<div class="col-lg-10">
						<input class="form-control" name="txtBuscarPersonas" placeholder='buscarar amigos'>	
					</div>
					<div class="col-lg-2">
						<button class="btn btnBuscarPersonas">Buscar</button>
					</div>
				</div>
				<div class="row marginNull divResultadoBusqueda">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>