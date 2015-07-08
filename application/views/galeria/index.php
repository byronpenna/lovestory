<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<?php $this->load->view("parts/universalInclude.php") ?>
	<!-- estilos -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/galeria/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/galeria/media.css") ?> >
	<!-- scripts -->
		<script type="text/javascript" src=<?php echo base_url("resources/js/galeria/script.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("resources/js/galeria/functions.js") ?> ></script>		
</head>
<body>
	<pre>
		<?php
		print_r($fotos);
		 ?>
	</pre>
	<div class="row marginNull">
		<form class="frm" method="post" action=<?php echo site_url("GaleriaController/subir") ?> enctype="multipart/form-data">
			<input type="file" name='flProfilePic'>	
			<button class="btn" type="submit">Enviar</button>
		</form>
		
	</div>
	<div class="row marginNull">
		<?php 
			foreach ($fotos as $key => $foto) {
		?>
			<div class="col-lg-3">
				<img class="imgGalery" src=<?php echo $foto->src ?>>
				<?php 
				if($foto->profile != 1){
				?>
				<button class="btnEstablecerPerfil" fotoid=<?php echo "'".$foto->id_foto."'" ?>>Establecer perfil</button>
				<?php 
				}
				?>
			</div>	
		<?php 
			}
		?>
		
	</div>
</body>
</html>