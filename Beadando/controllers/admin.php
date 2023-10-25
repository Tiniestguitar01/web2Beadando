<?php

class Admin_Controller
{
	public $baseName = 'admin';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars)
	{
		include_once(SERVER_ROOT.'models/admin_model.php');
		$adminModel = new Admin_Model;

		$retData = $adminModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "admin";

		$view = new View_Loader($this->baseName.'_main');

		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>