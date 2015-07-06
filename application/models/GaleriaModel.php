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