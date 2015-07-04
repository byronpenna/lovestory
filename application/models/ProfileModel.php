<?php 
include_once(APPPATH.'models/PadreModel.php');
class ProfileModel extends PadreModel
{
	
	function __construct()
	{
		parent::__construct();
	}

	function profilePicUrl($idUsuario){
		$retorno 	= "";
		$fileName 	= $this->getProfilePicName($idUsuario);
		if($fileName != ""){
			$ruta 		= PROJECT_PROFILE.$idUsuario."/".$fileName."";
			if(file_exists($ruta)){
				$ruta = base_url("resources/profiles/".$idUsuario."/".$fileName."");
				$retorno = $ruta;
			}	
		}
		return $retorno;
	}
	// base de datos
		function getProfilePicName($idUsuario){
			$name = "";
			$data = array(
				'id_usuario_fk' => $idUsuario,
				'profile'		=> 1
			);
			$this->db->trans_start();
				$query = $this->db->get_where('fotos_perfil', $data);
			$this->db->trans_complete();
			if($query->num_rows() > 0){
				$resultado = $query->result();
				$name = $resultado[0]->id_foto.$resultado[0]->extension;
			}
			return $name;
		}
		function getUsuarioById($idUsuario){
			$retorno 			= new stdClass();
			$retorno->estado 	= false;
			$this->db->trans_start();
				$query = $this->db->get_where('usuarios', array('id_usuario' => $idUsuario));
			$this->db->trans_complete();
			if($query->num_rows() > 0){
				$retorno->estado = true;
				$retorno->usuario = $query->result()[0];
			}
			return $retorno;
		}
}