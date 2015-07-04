<?php 	
include_once(APPPATH.'controllers/PadreController.php');
class ProfileController extends PadreController
{
	// propiedades 
		private $_model;
		
	function __construct()
	{
		parent::__construct();

	}
	// resultados url
		function index(){
			
		}
		function edit(){
			$this->load->view("profile/edit.php");
		}
	// acciones
		function update(){
			/*$profile = $this->doPostObject();
			print_r($profile);
			print_r($_FILES);*/
			echo $_SERVER['DOCUMENT_ROOT'].PROJECT_NAME;
			//if(move_uploaded_file($, destination))
		}
}