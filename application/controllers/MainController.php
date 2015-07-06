<?php 
include_once(APPPATH.'controllers/PadreController.php');
class MainController extends PadreController
{
	// propiedades 
		private $_model;
		private $_publicacionesModel;
	// funciones magicas 
		function __construct()
		{
			parent::__construct();
			$this->load->model("PublicacionesModel");
			$this->_publicacionesModel = new PublicacionesModel();
		}
	// funciones
		function index(){			
			if($this->session->userdata('usuario') != null ){
				$notificaciones = $this->_publicacionesModel->getPublicaciones($this->_usuarioSession->id_usuario);
				$usuario 		= $this->session->userdata('usuario');
				$data 			= array(
					'usuario' 			=> $usuario,
					'notificaciones'	=> $notificaciones
					);
				$this->load->view("main/index.php",$data);	
			}else{
				redirect("/welcome/index","refresh");
			}
			
		}
}