<?php 
class PadreController extends CI_Controller
{
	// propiedades 
		private $_usuarioSession;
	// funciones magicas
		function __construct()
		{
			parent::__construct();
			if($this->session->userdata('usuario') != null || !$this->isLoginUrl() ){
				$_usuarioSession = $this->session->userdata('usuario');
			}else{
				redirect("/welcome","refresh");
			}
		}
	// funciones
		function isLoginUrl(){
			$isLogin = false;
				$ci =& get_instance();
			// Muestra el nombre del controlador
		        $controlador 	= $ci->router->fetch_class();
		    // Muestra el nombre del metodo que se esta ejecutando
		        $menu_principal = $ci->router->fetch_method();
		   	if( $controlador == "welcome" ){
		   		$isLogin = true;
		   	}
		   	return $isLogin;
		}
		function doPostObject(){
			$obj = new stdClass();
			foreach ($_POST as $key => $value) {
				$obj->$key = $value;
			}
			return $obj;
		}
}