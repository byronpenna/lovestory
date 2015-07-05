<?php
include_once(APPPATH.'models/PadreModel.php');
class PublicacionesModel extends PadreModel
{
	
	function __construct()
	{
		parent::__construct();
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