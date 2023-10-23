<?php

class Regisztral_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "select id, csaladi_nev, utonev, jelszo, jogosultsag from felhasznalok where bejelentkezes='".$vars['login']."'";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			switch(count($felhasznalo)) {
				case 0:
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Helytelen felhasználói név-jelszó pár!";

					$sql = "insert into felhasznalok values (0, :last_name, :first_name, :username, :password, _1_)";
					$sth = $connection->prepare($sql);
					$count = $sth->execute(Array(":last_name"=>$_POST["last_name"], ":first_name"=>$_POST["first_name"], ":username"=>$_POST["login"], ":password"=>password_hash($_POST["password"],PASSWORD_DEFAULT)));

					$sql = "select id, csaladi_nev, utonev, jelszo, jogosultsag from felhasznalok where bejelentkezes='".$vars['login']."'";
					$stmt = $connection->query($sql);
					$bejelentkezett = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$retData['eredmeny'] = "OK";
					$retData['uzenet'] = "Kedves ".$bejelentkezett[0]['csaladi_nev']." ".$bejelentkezett[0]['utonev']."!<br><br>
											  Sikeres regisztráció<br><br>";
					Menu::setMenu();
					break;
				default:
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Már létezik ilyen felhasználó!";
					break;
			}
		}
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>