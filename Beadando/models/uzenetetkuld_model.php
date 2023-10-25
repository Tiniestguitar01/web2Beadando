<?php

class Uzenetetkuld_Model
{
	public function get_data()
	{
        $retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "insert into uzenet values (0, :felhasznalo, :tartalom, :datum)";
			$sth = $connection->prepare($sql);
            $count = $sth->execute(Array(":felhasznalo"=>$_SESSION['userlastname'], ":tartalom"=>$_POST['textarea'], ":datum"=>date("Y-m-d")));
		}
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>