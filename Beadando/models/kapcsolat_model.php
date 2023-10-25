<?php

class Kapcsolat_Model
{
	public function get_data()
	{
        $retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "insert into kapcsolat values (0, :email, :telefonszam, :cim,:tartalom)";
			$sth = $connection->prepare($sql);
            $count = $sth->execute(Array(":email"=>$_POST['email'], ":telefonszam"=>$_POST['phone'], ":cim"=>$_POST['title'],":tartalom"=>$_POST['textarea']));
		}
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>