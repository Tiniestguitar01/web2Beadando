<?php

class Uzenofal_Controller
{
	public $baseName = 'uzenofal';
	public function main(array $vars)
	{
		include_once(SERVER_ROOT.'models/uzenofal_model.php');
		$uzenofalModel = new Uzenofal_Model;

		$retData = $uzenofalModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "uzenofal";

		$view = new View_Loader($this->baseName.'_main');

		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}
?>