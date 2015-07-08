<?php 
include_once(APPPATH.'controllers/PadreController.php');
class GaleriaController extends PadreController
{
	// propiedades
		private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("GaleriaModel");
		$this->_model = new GaleriaModel();
	}
	function subir(){
		$idUsuario 	= $this->_usuarioSession->id_usuario;
		$path		= $_FILES['flProfilePic']['name'];
		$extension 	= pathinfo($path, PATHINFO_EXTENSION);
		$extension 	= ".".$extension;
		$retorno 	= $this->_model->saveImage($idUsuario,$extension);
		if($retorno->estado){
			$this->moverFoto($retorno->idFoto,$extension);
		}

	}
	function moverFoto($name,$extension){
		$profileUserFolder 	= PROJECT_PROFILE.$this->_usuarioSession->id_usuario."/";
		
		if(!file_exists($profileUserFolder)){
			mkdir($profileUserFolder);
		}
		$fileName = $name.$extension;
		if(move_uploaded_file($_FILES['flProfilePic']['tmp_name'],$profileUserFolder.$fileName)){
			echo "subida exitosamente";
		}
		else{
			echo " rayos";
		}
	}
	function setPerfilImg(){
		$frm = $this->getAjaxFrm();
		echo json_encode($this->_model->setPerfilImg($frm->idFoto,$this->_usuarioSession->id_usuario));
	}
	function getFotos($idUsuario){
		$fotos 	= $this->_model->getFotosById($idUsuario);
		foreach ($fotos as $key => $foto) {
			$url = PROJECT_PROFILE.$idUsuario."/".$foto->id_foto.$foto->extension;
			
			if(file_exists($url)){
				$url = base_url("resources/perfiles/".$idUsuario."/".$foto->id_foto.$foto->extension);
				$fotos[$key]->src = $url;
			}else{
				//unset($fotos[$key]);
			}
		}
		return $fotos;
	}
	function index(){
		$fotos 	= $this->getFotos($this->_usuarioSession->id_usuario);
		$data 	= array('fotos' => $fotos );
		$this->load->view("galeria/index.php",$data);
	}
}