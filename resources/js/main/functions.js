// generics 
	function getCuadritosPerfiles(perfil){
		console.log(perfil);
		div = "\
		<div class='row marginNull divTarjetaFind'>\
			<div class='row'>\
				<div class='col-lg-4'>\
					<img class='imgProfileFind' src='"+BASEURL+"resources/img/generales/no-image.png"+"'>\
				</div>\
				<div class='col-lg-8'>\
					<h3>"+perfil.nombres+"</h3>\
				</div>\
			</div>\
			<div class='row marginNull divControles'>\
				<div class='col-lg-4'>\
					poema \
				</div>\
			</div>\
			<div class='divOpciones row marginNull hidden'>\
				<label>Descripcion corta</label>\
				<textarea class='form-control'>\
				</textarea>\
				<label>Contenido</label>\
				<textarea class='form-control'>\
				</textarea>\
			</div>\
		</div>\
		";
		return div;
	}

// scripts
	function btnBuscarPersonas(){
		actualizarCatalogo(RAIZ+"ProfileController/findProfile",frm,function(data){
			try{
				datos 	= jQuery.parseJSON(data);
				console.log(datos);
				div 	= "";	
				$.each(datos.perfiles,function(i,perfil){
					console.log(perfil);
					div += getCuadritosPerfiles(perfil);
				});
				$(".divResultadoBusqueda").empty().append(div);
			}catch(ex){
				console.log(ex);
				alert("Ocurrio un error");
			}
		});
	}