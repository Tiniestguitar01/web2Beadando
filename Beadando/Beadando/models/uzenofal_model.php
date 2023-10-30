<?php

class Uzenofal_Model
{
	public function get_data()
	{
		$retData['eredmeny'] = "OK";
		$retData['rows'] = Array();
		
		try {
			$connection = Database::getConnection();
			$sql = "select id, felhasznalo, tartalom, datum from uzenet order by id";
			$stmt = $connection->query($sql);
			$retData['rows'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Hiba:<br>".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>