<?php 
include_once(APPPATH.'controllers/PadreController.php');
class MainController extends PadreController
{
	// propiedades 
		private $_model;
	// funciones magicas 
		function __construct()
		{
			parent::__construct();
		}
	// funciones
		function index(){			
			if($this->session->userdata('usuario') != null ){
				$usuario = $this->session->userdata('usuario');
				$data = array('usuario' => $usuario);
				$this->load->view("main/index.php",$data);	
			}else{
				redirect("/welcome/index","refresh");
			}
			
		}
}