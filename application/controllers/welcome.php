<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php');
class Welcome extends PadreController {
	// propiedades 
		private $_model;
	// funciones magicas 
		public function __construct(){
			parent::__construct();
			$this->load->model("IndexModel");
			$this->_model = new IndexModel();
		}
		public function index()
		{
			$this->load->view('index/index.php');
		}
		public function signup(){
			$registro 	= $this->doPostObject();
			$respuesta 	= $this->_model->signUp($registro);
			if($respuesta->estado){
				echo "Ingresado correctamente";
			}else{
				echo "Error al ingresar";
			}
		}
		public function login(){
			$loginForm 	= new stdClass();
			$userName 	= $_POST["Username"];
			$pass 		= $_POST["Pass"];
			// do object
				$usuario 			= new stdClass();
				$usuario->correo 	= $userName;
				$usuario->pass 		= $pass;
			$usuario = $this->_model->login($usuario);
			if($usuario->estado){
				$this->session->set_userdata("usuario",$usuario->usuario);
				redirect('/MainController/index', 'refresh');
				//$this->load->view("main/index.php");
			}else{
				$this->load->view("index/index.php");
			}
		}
		public function register(){
			$this->load->view("index/register.php");
		}
		public function logoff(){
			$this->session->sess_destroy();
			
			redirect("/welcome","refresh");
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */