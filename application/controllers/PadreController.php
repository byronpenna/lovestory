<?php 
class PadreController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function doPostObject(){
		$obj = new stdClass();
		foreach ($_POST as $key => $value) {
			$obj->$key = $value;
		}
		return $obj;
	}
}