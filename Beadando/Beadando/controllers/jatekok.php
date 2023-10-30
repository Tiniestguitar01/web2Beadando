<?php

class Jatekok_Controller
{
	public $baseName = 'jatekok';
	public function main(array $vars)
	{
		include_once(SERVER_ROOT.'models/jatekok_model.php');
		$jatekokModel = new Jatekok_Model;

		$retData = $jatekokModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "jatekok";

		$view = new View_Loader($this->baseName.'_main');

		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}
?>