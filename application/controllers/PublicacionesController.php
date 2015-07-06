<?php 
include_once(APPPATH.'controllers/PadreController.php');
class PublicacionesController extends PadreController
{
	// propiedades 
		private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("PublicacionesModel");
		$this->_model = new PublicacionesModel();
	}
	// 
		function getPublicaciones($idUsuario){
			$sql ="SELECT * 
					FROM publicaciones 
					WHERE id_usuarioreceptor = ".$idUsuario."
					limit 0,3";
			
		}
	// funciones ajax
		function publicar(){
			$publicacion 	= $this->getAjaxFrm();
			$respuesta 		= $this->_model->publicar($publicacion,$this->_usuarioSession->id_usuario);			
			echo json_encode($respuesta);
		}
}