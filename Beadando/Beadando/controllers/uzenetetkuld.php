<?php

class Uzenetetkuld_Controller
{
	public $baseName = 'uzenetetkuld';
	public function main(array $vars)
	{
		include_once(SERVER_ROOT.'models/uzenetetkuld_model.php');
		$uzenetetkuldModel = new Uzenetetkuld_Model;

		$retData = $uzenetetkuldModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "uzenofal";

		$view = new View_Loader($this->baseName.'_main');

		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>