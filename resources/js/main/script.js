$(document).ready(function(){
	// eventos
		// UI 
			$(document).on("click",".divTarjetaFind",function(){
				$(".divTarjetaFind").removeClass("activeTarjeta");
				$(".divOpciones").addClass("hidden");
				$(this).addClass("activeTarjeta");
				$(this).find(".divOpciones").removeClass("hidden");
			});
			
			$(document).on("click",".divTipoContenido",function(){
				$(".divTipoContenido").removeClass("activeContenido");
				$(this).addClass("activeContenido");
				tipoSelected = $(this).find(".txtTipoContenido").val();
				$(this).parents(".divControles").find(".txtHdContenidoSelect").val(tipoSelected);
			})
		// acciones ajax 
			$(document).on("click",".btnPublicar",function(){
				seccion = $(this).parents(".divTarjetaFind");
				frm 	= serializeSection(seccion);
				console.log(frm);
				btnPublicar(frm,seccion);
			});
			$(document).on("click",".btnBuscarPersonas",function(){
				frm = {
					textoBusqueda:$(".txtBuscarPersonas").val()
				}
				btnBuscarPersonas(frm);
			});
});