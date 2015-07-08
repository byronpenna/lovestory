$(document).ready(function(){
	$(document).on("click",".btnEstablecerPerfil",function(){
		frm = {idFoto: $(this).attr("fotoid")}
		actualizarCatalogo(RAIZ+"GaleriaController/setPerfilImg",frm,function(data){
			console.log(data);
			try{
				datos 	= jQuery.parseJSON(data);
				console.log(datos);
				if(datos.estado){
					alert("establecida correctamente");
				}
			}catch(ex){
				console.log(ex);
				alert("Ocurrio un error");
			}
		});
	});
});