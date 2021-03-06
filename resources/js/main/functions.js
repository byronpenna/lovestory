// generics 
	function getCuadritosPerfiles(perfil){
		div = "\
		<div class='row marginNull divTarjetaFind'>\
			<input type='hidden' name='txtHdIdPerfil' value='"+perfil.id_usuario+"'>\
			<div class='row marginNull'>\
				<div class='col-lg-4 divImageProfileFind'>\
					<img class='imgProfileFind' src='"+BASEURL+"resources/img/generales/no-image.png"+"'>\
				</div>\
				<div class='col-lg-8 divNombreFind'>\
					<h3>"+perfil.nombres+"</h3>\
				</div>\
			</div>\
			<div class='row marginNull divControles'>\
				<input type='hidden' value='-1' name='txtTipoContenido' class='txtHdContenidoSelect'>\
				<div class='col-lg-6 divTipoContenido'>\
					<input type='hidden' value='1' class='txtTipoContenido'>\
					<i class='fa fa-heart'></i> \
				</div>\
				<div class='col-lg-6 divTipoContenido'>\
					<input type='hidden' value='2' class='txtTipoContenido'>\
					<i class='fa fa-music'></i> \
				</div>\
			</div>\
			<div class='divOpciones row marginNull hidden'>\
				<div class='row marginNull opcionEnviarAlgo'>\
					<label>Descripcion corta</label>\
					<input name='txtShortDescription' class='form-control'>\
				</div>\
				<div class='row marginNull opcionEnviarAlgo'>\
					<label>Tipo de publicacion</label>\
					<select name='cbTipoPublicacion' class='form-control'>\
						<option value='1'>Publica</option>\
						<option value='2'>Secreta</option>\
						<option value='3'>Privada</option>\
					</select>\
				</div>\
				<div class='row marginNull opcionEnviarAlgo'>\
					<label>Contenido</label>\
					<textarea name='txtAreaDescripcion' class='form-control'></textarea>\
				</div>\
				<div class='text-center'>\
				<button class='btn btnPublicar'>Enviar</button>\
				</div>\
			</div>\
		</div>\
		";
		return div;
	}

// scripts
	function btnPublicar(frm,seccion){
		actualizarCatalogo(RAIZ+"PublicacionesController/publicar",frm,function(data){
			console.log(data);
			try{
				datos 	= jQuery.parseJSON(data);
				console.log(datos);
				if(datos.estado){
					alert("publicado correctamente");
				}
			}catch(ex){
				console.log(ex);
				alert("Ocurrio un error");
			}
		});
	}
	function btnBuscarPersonas(frm){
		console.log(frm);
		actualizarCatalogo(RAIZ+"ProfileController/findProfile",frm,function(data){
			try{
				datos 	= jQuery.parseJSON(data);
				div 	= "";	
				$.each(datos.perfiles,function(i,perfil){
					
					div += getCuadritosPerfiles(perfil);
				});
				$(".divResultadoBusqueda").empty().append(div);
			}catch(ex){
				console.log(ex);
				alert("Ocurrio un error");
			}
		});
	}