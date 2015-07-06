<?php 	
include_once(APPPATH.'controllers/PadreController.php');
class ProfileController extends PadreController
{
	// propiedades 
		private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("ProfileModel");
		$this->_model = new ProfileModel();
	}

	// resultados url
		function index(){
			
		}
		function edit(){
			$profilePicUrl 	= $this->_model->profilePicUrl($this->_usuarioSession->id_usuario);
			$usuario 		= $this->_model->getUsuarioById($this->_usuarioSession->id_usuario);
			$data = array(
				'usuario' 		=> $usuario->usuario,
				'profilePicUrl' => $profilePicUrl
			);
			$this->load->view("profile/edit.php",$data);
		}
	// acciones ajax 
		function findProfile(){
			$searchObj = $this->getAjaxFrm();
			$searchObj->idUsuario = $this->_usuarioSession->id_usuario;
			$resultado = $this->_model->findProfile($searchObj);

			echo json_encode($resultado);			
		}
	// acciones
		function update(){
			/*$profile = $this->doPostObject();
			print_r($profile);
			print_r($_FILES);*/

			// file
				$path 				= $_FILES['flProfilePic']['name'];
				$extension 			= pathinfo($path, PATHINFO_EXTENSION);
				$profileUserFolder 	= PROJECT_PROFILE.$this->_usuarioSession->id_usuario."/";
				if(!file_exists($profileUserFolder)){
					mkdir($profileUserFolder);
				}
				$fileName = "profile.".$extension;
				if(move_uploaded_file($_FILES['flProfilePic']['tmp_name'],$profileUserFolder.$fileName)){
					echo " subida exitosamente";
				}else{
					echo " rayos";
				}
			
		}
}