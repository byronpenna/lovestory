<?php
include_once(APPPATH.'models/PadreModel.php');
class PublicacionesModel extends PadreModel
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getPublicaciones($idUsuario){
		$sql ="SELECT p.*,
				if(id_tipopublicacion = 2,'Anonimo',CONCAT(emisor.nombres,' ',emisor.apeliidos)) as usuarioEmisor
				FROM publicaciones p
				inner join usuarios emisor
				on emisor.id_usuario = p.id_usuarioemisor
				WHERE id_usuarioreceptor = ".$idUsuario."
				limit 0,3";
		$this->db->trans_start();
			$query = $this->db->query($sql);
		$this->db->trans_complete();
		return $query->result();
	}
	function publicar($publicacion,$idUsuarioEmisor){
		$retorno = new stdClass();
		$retorno->estado = false;
		$objInsert = array(
			'short_description' 	=> $publicacion->txtShortDescription, 'descripcion' => $publicacion->txtAreaDescripcion, 
			'id_tipopublicacion' 	=> $publicacion->cbTipoPublicacion, 'id_usuarioemisor' => $idUsuarioEmisor, 
			'id_usuarioreceptor' 	=> $publicacion->txtHdIdPerfil, 'id_tipocontenido_fk' => $publicacion->txtTipoContenido
			);
		$this->db->trans_start();
			$query = $this->db->insert("publicaciones",$objInsert);
		$this->db->trans_complete();
		if ($this->db->trans_status() === true)
		{
		    $retorno->estado = true;
		}
		return $retorno;
	}
}