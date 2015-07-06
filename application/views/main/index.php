<!DOCTYPE html>
<html>
<head>
	<title>Bienvenidos</title>
	<?php $this->load->view("parts/universalInclude.php") ?>
	<!-- estilos -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/main/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/main/media.css") ?> >
	<!-- scripts -->
		<script type="text/javascript" src=<?php echo base_url("resources/js/main/script.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("resources/js/main/functions.js") ?> ></script>
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
				<?php 
					foreach ($notificaciones as $key => $notificacion) {
				?>
					<div class="col-lg-3 notificacion">
						<div class="contenidoNotificacion">
							<h3><?php echo $notificacion->usuarioEmisor ?></h3>
							<p>
								<?php echo $notificacion->short_description ?>
							</p>	
						</div>
						
					</div>	
				<?php 
					}
				?>
			</div>
		</div>
		<a href=<?php echo site_url("welcome/logoff") ?>>
			cerrar sesion
		</a>
		<div class="row marginNull">
			<div class="col-lg-3">

				
				<?php 
				foreach ($noticias as $key => $noticia) {
				?>
					<div class="col-lg-12 publicacionNews">
						<h3><?php echo $noticia->usuarioEmisor ?> le publico a <?php echo $noticia->usuarioReceptor ?> </h3>
						<p>
							esta es una shortdescription
						</p>
					</div>
				<?php 
				}
				?>
			</div>
			<div class="col-lg-3">
				
			</div>
			<div class="col-lg-3">
				<div class="row marginNull divBusquedaAmigos">
					<div class="col-lg-10">
						<input class="form-control txtBuscarPersonas" name="txtBuscarPersonas"  placeholder='buscarar amigos'>	
					</div>
					<div class="col-lg-2">
						<button class="btn btnBuscarPersonas">Buscar</button>
					</div>
				</div>
				<div class="row marginNull divResultadoBusqueda">
					<!--
					<div class="row marginNull divTarjetaFind">
						<div class="row">
							<div class="col-lg-4">
								<img class="imgProfileFind" src=<?php echo $usuario->profilePic ?>>
							</div>
							<div class="col-lg-8">
								<h3>Nombre completo</h3>
							</div>	
						</div>
						<div class="row marginNull divControles">
							<input type="hidden" value="-1" name="txtTipoContenido" class='txtHdContenidoSelect'>
							<div class="col-lg-4 divTipoContenido">
								<input type="hidden" value="1" class="txtTipoContenido">
								<i class="fa fa-heart"></i>
							</div>
						</div>
						<div class="divOpciones row marginNull hidden">
							<label>Descripcion corta</label>
							<textarea class="form-control">
								
							</textarea>
							<label>Contenido</label>
							<textarea class="form-control">
								
							</textarea>
						</div>
					</div>
					-->		
				</div>
			</div>
		</div>
	</div>
</body>
</html>