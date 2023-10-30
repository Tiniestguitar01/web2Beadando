<?php
class Kapcsolatkuld_Controller {
    public $baseName = 'kapcsolatkuld';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		include_once(SERVER_ROOT.'models/kapcsolat_model.php');
		$kapcsolatModel = new Kapcsolat_Model;

		$retData = $kapcsolatModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "kapcsolat";

		$view = new View_Loader($this->baseName.'_main');

		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}


?>