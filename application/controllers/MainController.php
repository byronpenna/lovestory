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
				$idUsuario 		= $this->_usuarioSession->id_usuario;
				$notificaciones = $this->_publicacionesModel->getPublicaciones($idUsuario);
				$news 			= $this->_publicacionesModel->getPublicacionesNews($idUsuario);
				$usuario 		= $this->session->userdata('usuario');
				$data 			= array(
					'usuario' 			=> $usuario,
					'notificaciones'	=> $notificaciones,
					'noticias'			=> $news
					);
				$this->load->view("main/index.php",$data);	
			}else{
				redirect("/welcome/index","refresh");
			}
			
		}
}