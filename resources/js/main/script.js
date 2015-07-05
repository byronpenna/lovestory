$(document).ready(function(){
	// eventos
		// UI 
			$(document).on("click",".divTarjetaFind",function(){
				
			})
		// acciones ajax 
			$(document).on("click",".btnBuscarPersonas",function(){
				frm = {
					textoBusqueda:$(".txtBuscarPersonas").val()
				}
				console.log(frm);
				btnBuscarPersonas(frm);
			});
});