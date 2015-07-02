<?php
include_once(APPPATH.'models/PadreModel.php');
class IndexModel extends PadreModel
{
	// publics 
		public function login(){
			$query = "";
			$this->db->trans_start();

			$this->db->trans_complete();
		}
	// propiedades

	// constructor
		function __construct()
		{
			parent::__construct();
		}
}