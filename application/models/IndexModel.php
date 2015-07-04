<?php
include_once(APPPATH.'models/PadreModel.php');
class IndexModel extends PadreModel
{
	// publics 
		public function login($usuario){
			$retorno 			= new stdClass();
			$retorno->estado 	= true;
			$sql 				= "SELECT * FROM `usuarios` WHERE correo = '".$usuario->correo."' and pass = MD5('".$usuario->pass."')";
			$this->db->trans_start();
				$query = $this->db->query($sql);
			$this->db->trans_complete();
			if ($this->db->trans_status() === true)
			{
				$resultado = $query->result();
				if($query->num_rows() > 0){
					$retorno->estado 	= true;
					$retorno->usuario 	= $resultado[0];
				}    
			}else{

			}
			return $retorno;
		}
	// propiedades

	// constructor
		function __construct()
		{
			parent::__construct();
		}
}