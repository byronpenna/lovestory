<?php 
include_once(APPPATH.'models/PadreModel.php');include_once(APPPATH.'models/PadreModel.php');
class GaleriaModel extends PadreModel
{
	
	function __construct()
	{
		parent::__construct();
	}
	function saveImage($idUsuario,$extension){
		$retorno 			= new stdClass();
		$retorno->estado 	= false;
		$data = array(
			'profile' 		=> 0, 
			'id_usuario_fk'	=> $idUsuario, 
			'extension' 	=> $extension);
		$this->db->trans_start();
			$query = $this->db->insert("fotos_perfil",$data);
			$retorno->idFoto = $this->db->insert_id();
		$this->db->trans_complete();
		if ($this->db->trans_status() === true)
		{
			$retorno->estado = true;
			
			print_r($retorno);
		}
		return $retorno;
	}
	function setPerfilImg($id,$idUsuario){
		$retorno = new stdClass();
		$retorno->estado = false;
		$sql 	= "UPDATE fotos_perfil set profile = 0 where id_usuario_fk = ".$idUsuario."";
		$sql2 	= "UPDATE fotos_perfil set profile = 1 where id_foto = ".$id."";
		$this->db->trans_start();
			$this->db->query($sql);
			$this->db->query($sql2);
		$this->db->trans_complete();
		if ($this->db->trans_status() === true)
		{
			$retorno->estado = true;
		}
		return $retorno;
	}
	function getFotosById($id){
		
		$sql = "SELECT * 
				from fotos_perfil 
				where id_usuario_fk = ".$id."";
		$this->db->trans_start();
			$query = $this->db->query($sql);
		$this->db->trans_complete();
		

		return $query->result();
	}
}